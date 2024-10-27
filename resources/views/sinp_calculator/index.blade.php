@extends('layouts.master')

@section('content')
    <main class="wrapper">

        {{-- Page Header --}}
        <div class="wptb-page-heading"
            style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
            <div class="container">
                <div class="wptb-item--inner">
                    <h2 class="wptb-item--title">SINP Calculator</h2>
                    <div class="wptb-breadcrumb-wrap">
                        <ul class="wptb-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><span>SINP Calculator</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center"> <!-- Center the card -->
                <div class="col-md-8"> <!-- Adjust the column width for responsiveness -->
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">SINP Calculator</h2>
                            <br><br>
                            <form action="{{ route('sinp.calculate') }}" method="POST">
                                @csrf
                                {{-- {{ dd($errors->all()) }} --}}
                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="age">
                                        <h5 style="color:#E13833">Select the age group you belong to (Max 12 Points):</h5>
                                    </label>
                                    <select name="age" class="form-control" required>
                                        <option value="" disabled selected hidden>
                                            <span style="float: left;">Select Age group</span>
                                            <span style="float: right;">▼</span>
                                        </option>
                                        <option value="0" {{ old('age') == '0' ? 'selected' : '' }}>Less than 18 years
                                        </option>
                                        <option value="8" {{ old('age') == '8' ? 'selected' : '' }}>18 - 21 years
                                        </option>
                                        <option value="12" {{ old('age') == '12' ? 'selected' : '' }}>22 - 34 years
                                        </option>
                                        <option value="10" {{ old('age') == '10' ? 'selected' : '' }}>35 - 45 years
                                        </option>
                                        <option value="8" {{ old('age') == '8' ? 'selected' : '' }}>46 - 50 years
                                        </option>
                                        <option value="0" {{ old('age') == '0' ? 'selected' : '' }}>More than 50 years
                                        </option>
                                    </select>
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <br><br>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="education">
                                        <h5 style="color:#E13833">Education (Max 23 Points):</h5>
                                    </label>
                                    <select name="education" class="form-control" required>
                                        <option value="" disabled {{ old('education') == '' ? 'selected' : '' }}
                                            hidden>
                                            <span style="float: left;">Select Education</span>
                                            <span style="float: right;">▼</span>
                                        </option>
                                        <option value="23" {{ old('education') == '23' ? 'selected' : '' }}>Doctorate
                                            or Masters degree</option>
                                        <option value="20" {{ old('education') == '20' ? 'selected' : '' }}>A three or
                                            more years degree program or Bachelor's degree</option>
                                        <option value="20" {{ old('education') == '20' ? 'selected' : '' }}>
                                            Certification for Trade</option>
                                        <option value="15" {{ old('education') == '15' ? 'selected' : '' }}>Canadian
                                            equivalent Diploma that needs 2 but less than 3 years at a Trade or Technical
                                            school, College, or University</option>
                                        <option value="12" {{ old('education') == '12' ? 'selected' : '' }}>Canadian
                                            equivalent Certificate or minimum 2 semesters but less than a 2-year program
                                        </option>
                                    </select>
                                    @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <br><br>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="work_experience">
                                        <h5 style="color:#E13833">Skilled Work Experience in the Last 5 Years (Max 10
                                            Points):</h5>
                                    </label>
                                    <select name="work_experience" class="form-control" required>
                                        <option value="" disabled
                                            {{ old('work_experience') == '' ? 'selected' : '' }} hidden>
                                            <span style="float: left;">Select Skilled Work Experience in the last 5
                                                Years</span>
                                            <span style="float: right;">▼</span>
                                        </option>
                                        <option value="10" {{ old('work_experience') == '10' ? 'selected' : '' }}>5
                                            Years - 10 points</option>
                                        <option value="8" {{ old('work_experience') == '8' ? 'selected' : '' }}>4
                                            Years - 8 points</option>
                                        <option value="6" {{ old('work_experience') == '6' ? 'selected' : '' }}>3
                                            Years - 6 points</option>
                                        <option value="4" {{ old('work_experience') == '4' ? 'selected' : '' }}>2
                                            Years - 4 points</option>
                                        <option value="2" {{ old('work_experience') == '2' ? 'selected' : '' }}>1 Year
                                            - 2 points</option>
                                    </select>
                                    @error('work_experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <br><br>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="past_work_experience">
                                        <h5 style="color:#E13833">Skilled Work Experience in the 6 to 10 Years Period (Max 5
                                            Points):</h5>
                                    </label>
                                    <select name="past_work_experience" class="form-control" required>
                                        <option value="" disabled
                                            {{ old('past_work_experience') == '' ? 'selected' : '' }} hidden>
                                            <span style="float: left;">Select Skilled Work Experience in the 6 to 10
                                                Years</span>
                                            <span style="float: right;">▼</span>
                                        </option>
                                        <option value="5" {{ old('past_work_experience') == '5' ? 'selected' : '' }}>5
                                            Years - 5 points</option>
                                        <option value="4" {{ old('past_work_experience') == '4' ? 'selected' : '' }}>4
                                            Years - 4 points</option>
                                        <option value="3" {{ old('past_work_experience') == '3' ? 'selected' : '' }}>3
                                            Years - 3 points</option>
                                        <option value="2" {{ old('past_work_experience') == '2' ? 'selected' : '' }}>2
                                            Years - 2 points</option>
                                        <option value="1" {{ old('past_work_experience') == '1' ? 'selected' : '' }}>1
                                            Year - 1 point</option>
                                    </select>
                                    @error('past_work_experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <br><br>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="language">
                                        <h5 style="color:#E13833">Language Proficiency (Max 20 Points):</h5>
                                    </label>
                                    <select name="language" class="form-control" required>
                                        <option value="" disabled {{ old('language') == '' ? 'selected' : '' }}
                                            hidden>
                                            <span style="float: left;">Select Language Proficiency</span>
                                            <span style="float: right;">▼</span>
                                        </option>
                                        <option value="20" {{ old('language') == '20' ? 'selected' : '' }}>CLB 8 and
                                            higher</option>
                                        <option value="18" {{ old('language') == '18' ? 'selected' : '' }}>CLB 7
                                        </option>
                                        <option value="16" {{ old('language') == '16' ? 'selected' : '' }}>CLB 6
                                        </option>
                                        <option value="14" {{ old('language') == '14' ? 'selected' : '' }}>CLB 5
                                        </option>
                                        <option value="12" {{ old('language') == '12' ? 'selected' : '' }}>CLB 4
                                        </option>
                                    </select>
                                    @error('language')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <br><br>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="adaptability">
                                        <h5 style="color:#E13833">Adaptability (Max 30 Points):</h5>
                                    </label>

                                    <div class="form-group" style="margin-bottom: 1.5rem;">
                                        <label for="close_family">Close Family Relation in Saskatchewan (20 Points):</label>
                                        <select name="close_family" class="form-control" required>
                                            <option value="" disabled selected hidden>Select Close Family Relation▼
                                            </option>
                                            <option value="20" {{ old('close_family') == '20' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="0" {{ old('close_family') == '0' ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                        @error('close_family')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group" style="margin-bottom: 1.5rem;">
                                        <label for="work_experience_sk">Previous Work Experience in Saskatchewan (5
                                            Points):</label>
                                        <select name="work_experience_sk" class="form-control" required>
                                            <option value="" disabled selected hidden>Select Previous Work Experience
                                                ▼</option>
                                            <option value="5"
                                                {{ old('work_experience_sk') == '5' ? 'selected' : '' }}>Yes</option>
                                            <option value="0"
                                                {{ old('work_experience_sk') == '0' ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('work_experience_sk')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group" style="margin-bottom: 1.5rem;">
                                        <label for="study_experience_sk">Previous Study Experience (5 Points):</label>
                                        <select name="study_experience_sk" class="form-control" required>
                                            <option value="" disabled selected hidden>Select Previous Study
                                                Experience in Saskatchewan ▼</option>
                                            <option value="5"
                                                {{ old('study_experience_sk') == '5' ? 'selected' : '' }}>Yes</option>
                                            <option value="0"
                                                {{ old('study_experience_sk') == '0' ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('study_experience_sk')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>


                                <br><br>
                                <button type="submit" class="btn btn-primary">Calculate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
