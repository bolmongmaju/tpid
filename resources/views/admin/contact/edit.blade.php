@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Contact</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-phone"></i> Edit Contact</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" name="email" value="{{ old('email') ?? $contact->email }}"
                                placeholder="Masukkan Email"
                                class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PHONE</label>
                            <input type="text" name="no_telp" value="{{ old('no_telp') ?? $contact->no_telp }}"
                                placeholder="Masukkan Nomor Telepon"
                                class="form-control @error('no_telp') is-invalid @enderror">

                            @error('no_telp')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>ALAMAT</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                placeholder="Masukkan Alamat" rows="10">{!! old('alamat') ?? $contact->alamat !!}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>MAPS</label>
                            <textarea class="form-control @error('maps') is-invalid @enderror" name="maps"
                                placeholder="Embed Maps" rows="10">{!! old('maps') ?? $contact->maps !!}</textarea>
                            @error('maps')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            UPDATE</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
