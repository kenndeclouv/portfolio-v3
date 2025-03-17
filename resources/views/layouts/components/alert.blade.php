<script>
    // Fungsi untuk mengatur opsi SweetAlert berdasarkan tema sistem
    function getSwalOptions(icon, title, text) {
        return {
            icon: icon,
            title: title,
            text: text,
            confirmButtonColor: '#0c0c0c',
            background: '#f9f9f9',
            color: '#0c0c0c',
        };
    }
</script>

@if (session('success'))
    <script>
        Swal.fire(getSwalOptions('success', 'Success!', '{{ session('success') }}'));
    </script>
@elseif (session('error'))
    <script>
        Swal.fire(getSwalOptions('error', 'Error!', '{{ session('error') }}'));
    </script>
@endif
@if (session('info'))
    <script>
        Swal.fire(getSwalOptions('info', 'Information!', '{{ session('info') }}'));
    </script>
@endif
@if (session('warning'))
    <script>
        Swal.fire(getSwalOptions('warning', 'Warning!', '{{ session('warning') }}'));
    </script>
@endif

@if ($errors->any())
    <script>
        const errorHtml = `
            <ul style="text-align: left; padding: 0 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        `;

        Swal.fire({
            ...getSwalOptions('error', 'Error!', ''),
            html: errorHtml,
        });
    </script>
@endif
