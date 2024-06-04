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
            form.attr('action', '/save');
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
                    } else if (actionUrl === '/save') {
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
