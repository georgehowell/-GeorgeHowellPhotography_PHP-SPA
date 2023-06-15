<div class="overlay">
    <div class="overlay__card">
        <span class="overlay__close" aria-label="Close overlay">×</span>
        <img src=`id` alt="Image, big" class="fetched-data" />
    </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
<script>
    $(document).on("click", ".button", function () {
        var imgId = $(this).data('id');
        $('.fetched-data').attr("src", imgId );
        $('.overlay').addClass('overlay--active');
    });
    $(document).on("click", ".overlay", function () {
        $('.overlay').removeClass('overlay--active');
    })
</script>