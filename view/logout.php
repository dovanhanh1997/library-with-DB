<script>
    let cf = confirm('Do you want to log out');
    if (cf) {
        window.location='logoutSuccess.php';
        console.log('ok log out');
    } else {
        console.log('not log out');
        window.history.back();

    }
</script>
