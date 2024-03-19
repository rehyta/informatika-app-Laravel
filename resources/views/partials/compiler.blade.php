<div class="compiler md-1">
    
    <div class="input-code">
        
        <form class="input md-1" method="post" action="{{ url('/compiler') }}">
            @csrf
            <button type="submit" class="run-btn mb-1 bg-danger" name="run"  style="color: white"><i class="bi bi-caret-left-fill" style="color: black"></i>RUN</button>
            <a href="/compilersave"><button class="run-btn mb-1 bg-danger" name="save"  style="color: white"><i class="bi bi-caret-left-fill" style="color: black"></i>SAVE</button>
            </a>
            <br>
            <textarea name="input" id="input" cols="60" rows="10" placeholder="tulis program anda disini" required></textarea>
        
            
        
            <textarea name="output" class="mt-2" id="output" cols="60" rows="10" readonly>
            </textarea>
        </form>
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
                }
            });
        });
    });
    
</script>


