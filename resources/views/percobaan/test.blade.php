@extends('layout.main')

@section('container')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="height:250px">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Cek Lagi jawaban anda</h1>
        <div class="lol">
          <div class="circle">
            <div class="cross"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})
</script>

@endsection