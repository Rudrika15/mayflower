@extends('layouts.app')
@section('nav', 'Package Detail')
@section('content')
    <!-- alert messages -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong><i class="fa fa-warning ico"></i> {{ $message }}</strong>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong> {{ __('There were some problems with your input') }}.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- end alerts -->
    <div class="box-content card danger">
        <!-- Header -->
        <div class="card-head">
            <div>
                <h4>Package Detail Edit</h4>
            </div>
            <div>
                <a href="{{ route('admin.packagedetail.index') }}" class="btn addbtn btn-sm">Back</a>
            </div>
        </div>
        <!-- end header  -->
        <!-- card -->
        <div class="card-content">
            <form action="{{ route('admin.packagedetail.update') }}" method="POST" data-toggle="validator">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $packagedetail->id }}">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Package Name:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="packageName" id="packageName" data-error='Package Name Field is required' required>

                                @foreach ($package as $package)
                                    <option value="{{ $package->id }}"
                                        {{ $package->id == $packagedetail->packageId ? 'selected' : '' }}>
                                        {{ $package->packageName }}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                            @error('packageName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Emotion To Convey:</strong>
                            <input type="text" class="form-control" data-error='Emotion To Convey Field is required'
                                required placeholder="Emotion To Convey" name="emotionToConvey" id="emotionToConvey"
                                value="{{ $packagedetail->emotionToConvey }}">
                            <div class="help-block with-errors"></div>
                            @error('emotionToConvey')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>For Package Names:</strong>
                            <input type="text" class="form-control" data-error='For Package Names Field is required'
                                 placeholder="For Package Names" name="forPackageNames" id="forPackageNames"
                                value="{{ $packagedetail->forPackageNames }}">
                            <div class="help-block with-errors"></div>
                            @error('forPackageNames')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" class="form-control" data-error='Description Field is required'
                                required placeholder="Description" name="description" id="description"
                                value="{{ $packagedetail->description }}">
                            <div class="help-block with-errors"></div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Location:</strong>
                            <input type="text" class="form-control" data-error='Location Field is required' required
                                placeholder="Location" name="location" id="location"
                                value="{{ $packagedetail->location }}">
                            <div class="help-block with-errors"></div>
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sample Type:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="sampleType" id="sampleType" data-error='Select Sample Type Field is required'
                                required multiple>
                                <option selected disabled>Select Sample Type</option>
                                @foreach ($sampleType as $sampleType)
                                    <option value="{{ $sampleType->id }}"
                                        {{ $sampleType->id == $sampleType->sampleType ? 'selected' : '' }}>
                                        {{ $sampleType->sampleType }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                            @error('sampleType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Test Type:</strong>
                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
                                name="testType" id="testType" data-error='Select Test Type Field is required'
                                multiple>
                                <option selected disabled>Select Test Type</option>
                                @foreach ($testType as $testType)
                                    <option value="{{ $testType->id }}"
                                        {{ $testType->id == $testType->testType ? 'selected' : '' }}>
                                        {{ $testType->testType }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                            @error('testType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Instructions:</strong>
                            <input type="text" class="form-control" data-error='Instructions Field is required'
                                required placeholder="InstructionS" name="instructionS" id="instructionS"
                                value="{{ $packagedetail->instructionS }}">
                            <div class="help-block with-errors"></div>
                            @error('instructionS')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Consultation:</strong>
                            <input type="text" class="form-control" data-error='Consultation Field is required'
                                required placeholder="consultation" name="consultation" id="consultation"
                                value="{{ $packagedetail->consultation }}">
                            <div class="help-block with-errors"></div>
                            @error('consultation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Awareness:</strong>
                            <input type="text" class="form-control" data-error='Awareness Field is required' 
                                placeholder="awareness" name="awareness" id="awareness"
                                value="{{ $packagedetail->awareness }}">
                            <div class="help-block with-errors"></div>
                            @error('awareness')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Medical History:</strong>
                            <input type="text" class="form-control" data-error='Medical History Field is required'
                                required placeholder="Medical History" name="medicalHistory" id="medicalHistory"
                                value="{{ $packagedetail->medicalHistory }}">
                            <div class="help-block with-errors"></div>
                            @error('medicalHistory')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tests:</strong>
                            <input type="text" class="form-control" data-error='Tests Field is required' 
                                placeholder="Tests" name="tests" id="tests" value="{{ $packagedetail->tests }}">
                            <div class="help-block with-errors"></div>
                            @error('tests')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prelimenary Test:</strong>
                            <input type="text" class="form-control" data-error='Prelimenary Test Field is required'
                                required placeholder="Prelimenary Test" name="prelimenaryTest" id="prelimenaryTest"
                                value="{{ $packagedetail->prelimenaryTest }}">
                            <div class="help-block with-errors"></div>
                            @error('prelimenaryTest')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>BMI:</strong>
                            <input type="text" class="form-control" data-error='BMI Rate Field is required' required
                                placeholder="BMI" name="bmi" id="bmi" value="{{ $packagedetail->bmi }}">
                            <div class="help-block with-errors"></div>
                            @error('bmi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Radiology Imaging:</strong>
                            <input type="text" class="form-control" data-error='Radiology Imaging Field is required'
                                required placeholder="Radiology Imaging" name="radiologyImaging" id="radiologyImaging"
                                value="{{ $packagedetail->radiologyImaging }}">
                            <div class="help-block with-errors"></div>
                            @error('radiologyImaging')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>MRI:</strong>
                            <input type="text" class="form-control" data-error='MRI Field is required' 
                                placeholder="MRI" name="mri" id="mri" value="{{ $packagedetail->mri }}">
                            <div class="help-block with-errors"></div>
                            @error('mri')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mammography:</strong>
                            <input type="text" class="form-control" data-error='Mammography Field is required'
                                required placeholder="Mammography" name="mammography" id="mammography"
                                value="{{ $packagedetail->mammography }}">
                            <div class="help-block with-errors"></div>
                            @error('mammography')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cancer Detection:</strong>
                            <input type="text" class="form-control" data-error='Cancer Detection Field is required'
                                required placeholder="Cancer Detection" name="cancerDetection" id="cancerDetection"
                                value="{{ $packagedetail->cancerDetection }}">
                            <div class="help-block with-errors"></div>
                            @error('cancerDetection')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Diabetes Screening:</strong>
                            <input type="text" class="form-control" data-error='Diabetes Screening Field is required'
                                required placeholder="Diabetes Screening" name="diabetesScreening" id="diabetesScreening"
                                value="{{ $packagedetail->diabetesScreening }}">
                            <div class="help-block with-errors"></div>
                            @error('diabetesScreening')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Thyroid Profile:</strong>
                            <input type="text" class="form-control" data-error='Thyroid Profile Field is required'
                                required placeholder="Thyroid Profile" name="thyroidProfile" id="thyroidProfile"
                                value="{{ $packagedetail->thyroidProfile }}">
                            <div class="help-block with-errors"></div>
                            @error('thyroidProfile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sexual Fertility Hormones:</strong>
                            <input type="text" class="form-control"
                                data-error='Sexual Fertility Hormones Field is required' required
                                placeholder="Sexual Fertility Hormones" name="sexualFertilityHormones"
                                id="sexualFertilityHormones" value="{{ $packagedetail->sexualFertilityHormones }}">
                            <div class="help-block with-errors"></div>
                            @error('sexualFertilityHormones')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kidney:</strong>
                            <input type="text" class="form-control" data-error='Kidney Field is required' required
                                placeholder="Kidney" name="kidney" id="kidney"
                                value="{{ $packagedetail->kidney }}">
                            <div class="help-block with-errors"></div>
                            @error('kidney')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ECG:</strong>
                            <input type="text" class="form-control" data-error='ECG Field is required' 
                                placeholder="ECG" name="ecg" id="ecg" value="{{ $packagedetail->ecg }}">
                            <div class="help-block with-errors"></div>
                            @error('ecg')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Lipid Profile:</strong>
                            <input type="text" class="form-control" data-error='Lipid Profile Field is required'
                                required placeholder="Lipid Profile" name="lipidProfile" id="lipidProfile"
                                value="{{ $packagedetail->lipidProfile }}">
                            <div class="help-block with-errors"></div>
                            @error('lipidProfile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Liver Function:</strong>
                            <input type="text" class="form-control" data-error='Liver Function Field is required'
                                required placeholder="Liver Function" name="liverFunction" id="liverFunction"
                                value="{{ $packagedetail->liverFunction }}">
                            <div class="help-block with-errors"></div>
                            @error('liverFunction')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pregnancy Test:</strong>
                            <input type="text" class="form-control" data-error='Pregnancy Test Field is required'
                                required placeholder="Pregnancy Test" name="pregnancyTest" id="pregnancyTest"
                                value="{{ $packagedetail->pregnancyTest }}">
                            <div class="help-block with-errors"></div>
                            @error('pregnancyTest')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Infection Recording:</strong>
                            <input type="text" class="form-control" data-error='Infection Recording Field is required'
                                required placeholder="Infection Recording" name="infectionRecording"
                                id="infectionRecording" value="{{ $packagedetail->infectionRecording }}">
                            <div class="help-block with-errors"></div>
                            @error('infectionRecording')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Electrolytes:</strong>
                            <input type="text" class="form-control" data-error='Electrolytes Field is required'
                                required placeholder="Electrolytes" name="electrolytes" id="electrolytes"
                                value="{{ $packagedetail->electrolytes }}">
                            <div class="help-block with-errors"></div>
                            @error('electrolytes')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 form-group text-center">
                        <button type="submit" class="btn addbtn waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>


        <!-- end card -->
    </div>
@endsection
