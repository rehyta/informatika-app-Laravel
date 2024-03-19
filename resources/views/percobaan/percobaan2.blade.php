@extends('layout.course')


@section ('page title')

<h2>HALAMAN PERCOBAAN</h2>
<p>Silahkan ikuti instruksi</p>

@endsection

@section ('instruction')

<h2 class="text-center m-3">INSTRUKSI</h2>
<p>Nanti kamu harus...</p>

@endsection

@section ('code box')


  @include ('partials.compilerbox')


      <!-- Modal -->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Your custom success message goes here.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NEXT</button>
              </div>
            </div>
          </div>
        </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    $('#output').val(JSON.stringify(response.output)) ;

                    if (response.output === "nama beliau suwarno") {
                        $('#successModal').modal('show');
                    }
                }
            });
        });
    });
    
</script>

@endsection

