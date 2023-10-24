<script>
    @if(Session::has('success'))
    toastr.options = {
        "closeButton": true,
        "progressBar": 5000
    }
    toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('info'))
    toastr.options = {
        "closeButton": true,
        "progressBar": 5000
    }
    toastr.info("{{ Session::get('info') }}");
    @endif


    @if(Session::has('warning'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.warning("{{ Session::get('warning') }}");
    @endif


    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>