<script>
    var isPasswordRevealed  = false;

    $('#password-toogle').on('click', function(){
        isPasswordRevealed = !isPasswordRevealed;

        if (isPasswordRevealed){
            $('#password-toogle-img').attr('src', "{{ url('assets/images/eye.png') }}");
            $('#password').attr('type', 'text');
        }
        else {
            $('#password-toogle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}");
            $('#password').attr('type', 'password');
        }
    })
</script>