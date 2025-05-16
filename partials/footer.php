<footer class="footer text-center text-sm-start d-print-none">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card1 mb-0 rounded-bottom-0">
          <div class="card-body1">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <p class="text-muted mb-0">© 2025 All rights reserved</p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="white" href="#">FAQs</a></li>
                <li class="list-inline-item"><a class="white" href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a class="white" href="#">Terms & Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->
<!-- vendor js -->

<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/pages/form-wizard.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="../../../apexcharts.com/samples/assets/stock-prices.js"></script>
<script src="assets/js/pages/index.init.js"></script>
<script src="assets/js/DynamicSelect.js"></script>
<script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/datatable.init.js"></script>
<script src="assets/js/app.js"></script>
    <script src="assets/libs/uppy/uppy.legacy.min.js"></script>
        <script src="assets/js/pages/file-upload.init.js"></script>
<!-- <script src="assets/libs/fullcalendar/index.global.min.js"></script>
<script src="assets/js/pages/calendar.init.js"></script> -->
</body>
<!--end body-->

</html>
<script>
  function toggleDropdown(elem) {
    const dropdown = elem.nextElementSibling;
    const isOpen = dropdown.style.display === 'block';

    // Close all open dropdowns first
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.style.display = 'none';
    });

    // Toggle this one
    if (!isOpen) {
      dropdown.style.display = 'block';

      // Add global click listener
      document.addEventListener('click', function handleOutsideClick(e) {
        if (!elem.parentElement.contains(e.target)) {
          dropdown.style.display = 'none';
          document.removeEventListener('click', handleOutsideClick); // remove after execution
        }
      });
    }
  }

  function selectItem(selectedItem) {
    const allItems = selectedItem.parentElement.querySelectorAll('li');
    allItems.forEach(item => item.classList.remove('active'));
    selectedItem.classList.add('active');
  }
</script>


<script>
  function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');

    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script>
  var options = {
    series: [{
      name: 'series1',
      data: [31, 40, 28, 51, 42, 109, 100]
    }, {
      name: 'series2',
      data: [11, 32, 45, 32, 34, 52, 41]
    }],
    chart: {
      height: 350,
      type: 'area'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      type: 'datetime',
      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
      x: {
        format: 'dd/MM/yy HH:mm'
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>