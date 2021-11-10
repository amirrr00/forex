@extends('layouts.main')
@section('custom_style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')
    <section id="import_excel">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <form method="post" name="ajax_form" id="load_excel">
                    @csrf
                        <div class="form-group">
                            <label for="upload_file">Choose CSV</label>
                            <input type="file" id="upload_file" name="uplode_file">
                        </div>
                        <button type="submit">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_script')
<script>
    $( document ).ready(function() {
        $('#load_excel').submit(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var file_data = $('#upload_file').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: "{{route('uplode_csv_cont')}}", // <-- point to server-side PHP script
                dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data){
                }
            });
        });

    });

</script>
@endsection