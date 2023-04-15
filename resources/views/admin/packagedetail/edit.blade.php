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
            <form action="{{ route('admin.packagedetail.update') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                name="sampleType[]" id="sampleType" data-error='Select Sample Type Field is required'
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
                                name="testType[]" id="testType" data-error='Select Test Type Field is required'
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

                    <div class="form-group">
                        <strong class="d-flex justify-content-start" style="padding-left: 18px;">Test :</strong>
                        <br><br>
                        @foreach ($test as $testData)
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <input type='checkbox' name="testName[]" id="testName" class="" value="{{ $testData->id }}">{{ $testData->testName }} <br>
                                <label>{{ Form::checkbox('testName[]', $testData->id, in_array($testData->id, $testpackages) ? true : false, array('class' => 'name')) }}
                                {{ $testData->testName }}</label>
                            </div>
                        @endforeach
                        <!-- @foreach($permission as $value)
                        <div class="col-md-3">
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                        </div>
                        @endforeach -->
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
