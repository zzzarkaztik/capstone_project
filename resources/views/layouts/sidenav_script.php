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