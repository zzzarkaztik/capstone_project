<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Trident Buslines | Home</title>
</head>

<body class="mt-5 pt-2">
    @include('layouts/navbar')



    <div id="sidebar">
        <a href="#" class="active">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>


    <script>
        // JavaScript to handle active link highlighting
        var sidebarLinks = document.querySelectorAll('#sidebar a');

        sidebarLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                sidebarLinks.forEach(function(innerLink) {
                    innerLink.classList.remove('active');
                });

                // Add 'active' class to the clicked link
                link.classList.add('active');
            });
        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
