@extends('instructor.master')

@section('content')
@include('instructor.header')
@include('instructor.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Exercises</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('instructor.scenarios') }}">Scenarios</a></li>
                        <li class="breadcrumb-item active">View Exercise</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View Exercise</h3>
                        </div>
                        <div class="card-body">
                            @foreach($viewExercise as $view)
                            <form action="{{ route('exercises.updateExercise') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_exercise" value="{{ $view->id_exercise }}">
                                <div class="form-group">
                                    <label for="project_name">Project Name</label>
                                    <input class="form-control" type="text" name="project_name" id="project_name" placeholder="Input Project Name" value="{{ $view->project_name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10">{{ $view->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sejarah_pemakaian">Sejarah Pemakaian</label>
                                    <textarea class="form-control" id="sejarah_pemakaian" name="sejarah_pemakaian" rows="10">{{ $view->sejarah_pemakaian }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sejarah_produksi">Sejarah Produksi</label>
                                    <textarea class="form-control" id="sejarah_produksi" name="sejarah_produksi" rows="10">{{ $view->sejarah_produksi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="spesifikasi">spesifikasi</label>
                                    <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="10">{{ $view->spesifikasi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kinerja">Kinerja</label>
                                    <textarea class="form-control" id="kinerja" name="kinerja" rows="10">{{ $view->kinerja }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="persenjataan">persenjataan</label>
                                    <textarea class="form-control" id="persenjataan" name="persenjataan" rows="10">{{ $view->persenjataan }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="select2" name="actions[{{  }}][type]" style="width: 100%" onchange="updateMediaInput()">
                                        <option value="" disabled> Pilih tipe</option>
                                        <option value="Picture" @if ($list->type == "Picture") selected @endif>Picture</option>
                                        <option value="Video" @if ($list->type == "Video") selected @endif>Video</option>
                                        <option value="Youtube" @if ($list->type == "Youtube") selected @endif>Youtube</option>
                                    </select>
                                </div>
                                <div class="form-group media-upload-group-{{  }}" style="display: none;">
                                    <label for="media_upload">Media Upload</label>
                                    <input type="file" class="form-control" name="actions[{{  }}][media_upload]">
                                </div>
                                <div class="form-group media-link-group-{{  }}" style="display: none;">
                                    <label for="media_link">Media Link</label>
                                    <input type="text" class="form-control" name="actions[{{  }}][media_link]" value="{{ $list->type == 'Youtube' ? $list->media_name : '' }}">
                                </div>
                                <div class="form-group float-right">
                                    {{-- <button class="btn btn-lg btn-danger" type="reset">Reset</button> --}}
                                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Part Name</h3>
                        </div>

                        {{-- <div class="media">
                            <img class="mr-3" src="..." alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div> --}}


                        <div class="card-body">
                            <form action="{{ route('exercises.updateactionExercise') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_exercise" value="{{ $listScenarioAction->first()->id_exercise }}">
                                @foreach($listScenarioAction as $list)
                                <div class="media">
                                    @if ($list->media_name)
                                    <div class="media-body">
                                        <label for="media_preview">Media Preview</label>
                                        @if ($list->type == 'Video')
                                        <video width="320" height="240" controls>
                                            <source src="{{ Storage::url('media/'.$list->media_name) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        @elseif ($list->type == 'Youtube')
                                        <br><a href="{{ $list->media_name }}" target="_blank">{{ $list->media_name }}</a>
                                        @elseif ($list->type == 'Picture')
                                        <img src="{{ Storage::url('media/'.$list->media_name) }}" alt="Media Preview" width="320" height="240">
                                        @endif
                                    </div>
                                    @endif
                                    <div class="media-body">
                                        <div class="form-group">
                                            <label for="actions_name">Action Name</label>
                                            <input type="text" class="form-control" name="actions[{{ $loop->index }}][actions_name]" value="{{ $list->actions_name }}">
                                            <input type="hidden" name="actions[{{ $loop->index }}][id]" value="{{ $list->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select class="select2" name="actions[{{ $loop->index }}][type]" style="width: 100%" onchange="updateMediaInput(this, {{ $loop->index }})">
                                                <option value="" disabled> Pilih tipe</option>
                                                <option value="Picture" @if ($list->type == "Picture") selected @endif>Picture</option>
                                                <option value="Video" @if ($list->type == "Video") selected @endif>Video</option>
                                                <option value="Youtube" @if ($list->type == "Youtube") selected @endif>Youtube</option>
                                            </select>
                                        </div>
                                        <div class="form-group media-upload-group-{{ $loop->index }}" style="display: none;">
                                            <label for="media_upload">Media Upload</label>
                                            <input type="file" class="form-control" name="actions[{{ $loop->index }}][media_upload]">
                                        </div>
                                        <div class="form-group media-link-group-{{ $loop->index }}" style="display: none;">
                                            <label for="media_link">Media Link</label>
                                            <input type="text" class="form-control" name="actions[{{ $loop->index }}][media_link]" value="{{ $list->type == 'Youtube' ? $list->media_name : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                <div class="form-group float-right">
                                    {{-- <button class="btn btn-lg btn-danger" type="reset">Reset</button> --}}
                                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function updateMediaInput(selectElement, index) {
        var type = selectElement.value;
        var mediaUploadGroup = document.querySelector('.media-upload-group-' + index);
        var mediaLinkGroup = document.querySelector('.media-link-group-' + index);

        if (type === 'Picture' || type === 'Video') {
            mediaUploadGroup.style.display = 'block';
            mediaLinkGroup.style.display = 'none';
        } else if (type === 'Youtube') {
            mediaUploadGroup.style.display = 'none';
            mediaLinkGroup.style.display = 'block';
        } else {
            mediaUploadGroup.style.display = 'none';
            mediaLinkGroup.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var selectElements = document.querySelectorAll('.select2');
        selectElements.forEach(function(selectElement, index) {
            selectElement.addEventListener('change', function() {
                updateMediaInput(this, index);
            });
            updateMediaInput(selectElement, index);
        });
    });
</script>

@endsection
