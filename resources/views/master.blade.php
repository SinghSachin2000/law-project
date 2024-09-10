<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Law web</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  @vite('resources/css/app.css')
  @vite('resources/js/app.js')


  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>



  <script>
    function showMap(lat, long) {
      var map = L.map('map').setView([lat, long], 10);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([lat, long]).addTo(map);
    }

    window.onload = function() {
      showMap(28.6139, 77.2090);
    };
  </script>
</head>

<body>

  {!! view('header')->render() !!}


  @yield('content')

  <a class="w-[200px] h-[50px]  font-medium text-center text-white bg-red-600 fixed bottom-[50%] -right-[70px] rounded-2xl p-3 shadow-lg rotate-[270deg] z-50 cursor-pointer" data-toggle="modal" data-target="#genericModal">
    REGISTER NOW
  </a>

  @include('enquiry')

  {!! view('footer')->render() !!}

   
  <script>
    function toggleAccordion(contentId) {
      const headers = document.querySelectorAll('.accordion-header');
      const contents = document.querySelectorAll('.accordion-content');

      // Hide all contents and remove border from all headers
      contents.forEach(content => {
        if (content.id !== contentId) {
          content.style.display = 'none';
        }
      });

      headers.forEach(header => {
        if (header.getAttribute('data-content-id') !== contentId) {
          header.classList.remove('border-4', 'border-blue-300');
        }
      });

      const clickedHeader = document.querySelector(`.accordion-header[data-content-id="${contentId}"]`);
      const clickedContent = document.getElementById(contentId);

      // Toggle display and border for the clicked header and content
      if (clickedContent.style.display === 'block') {
        clickedContent.style.display = 'none';
        clickedHeader.classList.remove('border-2', 'border-blue-100');
      } else {
        clickedContent.style.display = 'block';
        clickedHeader.classList.add('border-2', 'border-blue-100');
      }
    }
  </script>


<script>
  function openSidenav() {
    document.getElementById('sideNav').classList.remove('translate-x-full');
  }

  function closeSidenav() {
    document.getElementById('sideNav').classList.add('translate-x-full');
  }

  document.getElementById('openNav').addEventListener('click', openSidenav);
  document.getElementById('closeNav').addEventListener('click', closeSidenav);

  // Close the sidenav when a nav item is clicked
  document.querySelectorAll('#navItems a').forEach(item => {
    item.addEventListener('click', function() {
      closeSidenav();
    });
  });

  // Toggle dropdown menus for multiple dropdowns
  document.querySelectorAll('.DropdownMenu').forEach(button => {
    button.addEventListener('click', function(event) {
      event.stopPropagation();
      const menu = this.nextElementSibling; // Get the ul next to the button
      menu.classList.toggle('hidden');
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function(event) {
    document.querySelectorAll('.DropdownMenu + ul').forEach(menu => {
      if (!menu.contains(event.target) && !event.target.closest('.DropdownMenu')) {
        menu.classList.add('hidden');
      }
    });
  });
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('genericModal'));

    function showModal(title, courseOptions, mediumOptions, modeOptions) {
        document.getElementById('modalLabel').innerText = title;

        // Populate dropdown options
        populateDropdown('course', courseOptions);
        populateDropdown('medium', mediumOptions);
        populateDropdown('mode', modeOptions);

        modal.show();
    }

    function populateDropdown(id, options) {
        const select = document.getElementById(id);
        select.innerHTML = ''; // Clear existing options
        options.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.value = option.value;
            optionElement.text = option.text;
            select.add(optionElement);
        });
    }

    // Add event listeners for buttons
    document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function() {
            const title = this.getAttribute('data-modal-title');
            const courseOptions = JSON.parse(this.getAttribute('data-course-options'));
            const mediumOptions = JSON.parse(this.getAttribute('data-medium-options'));
            const modeOptions = JSON.parse(this.getAttribute('data-mode-options'));

            showModal(title, courseOptions, mediumOptions, modeOptions);
        });
    });
});



</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/modal-handler.js') }}"></script>
</body>

</html>