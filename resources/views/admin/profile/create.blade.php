@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Profile</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Tambah Profile</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>NAMA KECAMATAN</label>
                            <input type="text" name="nama" value="{{ old('nama') }}"
                                placeholder="Masukkan Nama Kecamatan"
                                class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>LOGO</label>
                            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">

                            @error('logo')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>FAVICON</label>
                            <input type="file" name="favicon" class="form-control @error('favicon') is-invalid @enderror">

                            @error('favicon')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>STRUKTUR ORGANISASI</label>
                            <input type="file" name="struktur" class="form-control @error('struktur') is-invalid @enderror">

                            @error('struktur')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>VISI</label>
                            <textarea class="form-control content @error('visi') is-invalid @enderror" name="visi"
                                placeholder="Masukkan Visi" rows="10">{!! old('visi') !!}</textarea>
                            @error('visi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>MISI</label>
                            <textarea class="form-control content @error('misi') is-invalid @enderror" name="misi"
                                placeholder="Masukkan Misi" rows="10">{!! old('misi') !!}</textarea>
                            @error('misi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DASAR HUKUM</label>
                            <textarea class="form-control content @error('dasar_hukum') is-invalid @enderror" name="dasar_hukum"
                                placeholder="Masukkan Dasar Hukum" rows="10">{!! old('dasar_hukum') !!}</textarea>
                            @error('dasar_hukum')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>SEJARAH</label>
                            <textarea class="form-control content @error('sejarah') is-invalid @enderror" name="sejarah"
                                placeholder="Masukkan Sejarah" rows="10">{!! old('sejarah') !!}</textarea>
                            @error('sejarah')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    var editor_config = {
        selector: "textarea.content",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        forced_root_block : false,
    };

    tinymce.init(editor_config);

</script>
@stop
