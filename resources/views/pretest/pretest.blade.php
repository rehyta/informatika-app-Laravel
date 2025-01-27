<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INFORMATIKA | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofNlq+8AL/Unr+rdEJJTr5AowBIKaLW+Z" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6pBf12OWJ8/l1z9ZzNlRH6Szi9NlG2zU" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('codemirror5-master\lib\codemirror.css') }}">
    <script src="{{ asset('codemirror5-master\mode\clike\clike.js') }}"></script>
  </head>
  <body>

    @include('partials.navbar')

    <div class="full">

        <div class="page-title text-center mt-3">
            <h1>pretest</h1>
            <p>Bacalah petunjuk instruksi yang tersedia dan terapkan dalam bahasa pemrograman</p>
        </div>

        <div class="row">
            <div class="col border border-2" id="left" style="height: auto">
                <h4 style="text-align: center">instruksi</h4>
                <br>
                <p>
                    Dika ingin membuat program sederhana yang bisa menentukan apakah sebuah bilangan genap atau ganjil.<br>
                    <br>
                    <br>1. Jika bilangan habis dibagi 2 (modulus % 2 == 0), maka bilangan tersebut Genap.
                    <br>2. Jika tidak, maka bilangan tersebut Ganjil.
                    <br>
                    <br>Tugas:
                    <br>Buatlah program C++ yang meminta pengguna memasukkan sebuah bilangan, lalu menentukan apakah bilangan tersebut genap atau ganjil.
                </p>
            </div>

            <div class="col border border-2" id="right">
                <div class="box">
                    <div class="compiler md-1">
                        <div class="input-code">
                            <form id="compilerForm" class="input md-1" method="post" action="">
                                @csrf
                                <button type="button" class="btn2 run-btn mb-1 bg-danger" id="runButton" style="color: white"><i class="bi bi-caret-left-fill" style="color: black"></i>RUN</button>
                                <button type="button" class="btn2 run-btn mb-1 bg-danger" id="saveButton" style="color: white"><i class="bi bi-caret-left-fill" style="color: black"></i>SUBMIT</button>
                                <br>
                                <textarea name="input" id="input" cols="60" rows="10" placeholder="tulis program anda disini" required></textarea>
                                <textarea name="output" class="mt-2" id="output" cols="60" rows="10" readonly></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#runButton').click(function () {
            var form = $('#compilerForm');
            form.attr('action', '/compiler');
            form.submit();
        });

        $('#saveButton').click(function () {
            var form = $('#compilerForm');
            form.attr('action', '/savetest');
            form.submit();
        });

        $('#compilerForm').submit(function (e) {
            e.preventDefault();
            var actionUrl = $(this).attr('action');
            $.ajax({
                type: 'POST',
                url: actionUrl,
                data: $(this).serialize(),
                success: function (response) {
                    if (actionUrl === '/compiler') {
                        $('#output').val(JSON.stringify(response.output));
                    } else if (actionUrl === '/savetest') {
                        alert('Kamu sudah berhasil!!');
                        window.location.href='/home';
                    }
                },
                error: function (response) {
                    console.error('Error:', response);
                }
            });
        });
    });
</script>

  </body>
</html>