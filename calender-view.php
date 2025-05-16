<?php include 'partials/header.php'; ?>


<style>
    .min-h-screen {
        min-height: 100vh;
    }

    .pb-10 {
        padding-bottom: 2.5rem;
    }

    /* Schedule Layout */
    .schedule {
        max-width: 1200px;
        margin: 0 auto;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        background-color: white;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .schedule-header {
        border-bottom: 1px solid #e5e7eb;
        background-color: white;
    }

    .flex {
        display: flex;
    }

    .items-center {
        align-items: center;
    }

    .justify-between {
        justify-content: space-between;
    }

    .p-4 {
        padding: 20px !important;
    }

    .border-b {
        border-bottom: 1px solid #e5e7eb;
    }

    .space-x-4>*+* {
        margin-left: 1rem;
    }

    .space-x-2>*+* {
        margin-left: 0.5rem;
    }

    .text-2xl {
        font-size: 1.5rem;
    }

    .font-semibold {
    font-weight: 600;
    margin-bottom: 0px;
}

    /* Buttons */
    button {
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        background-color: white;
        border: 1px solid #e5e7eb;
        cursor: pointer;
        display: flex;
        align-items: center;
        font-size: 0.875rem;
    }

    button:hover {
        background-color: #f9fafb;
    }

    .nav-button {
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .today-button {
        background-color: #f3f4f6;
        font-weight: 500;
    }

    .today-button:hover {
        background-color: #e5e7eb;
    }

    .view-mode-button {
        display: flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: 0.375rem;
        background-color: white;
        border: 1px solid #e5e7eb;
    }

    .ml-1 {
        margin-left: 0.25rem;
    }

    /* Dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 120px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        z-index: 10;
        border-radius: 0.375rem;
        border: 1px solid #e5e7eb;
    }

    .dropdown-content a {
        color: #333;
        padding: 0.75rem 1rem;
        text-decoration: none;
        display: block;
        font-size: 0.875rem;
    }

    .dropdown-content a:hover {
        background-color: #f9fafb;
    }

    .dropdown-content.show {
        display: block;
    }

    .date-display {
        padding: 0.75rem 1.5rem;
        background-color: #f3f4f6;
        font-weight: 500;
        text-align: center;
    }

    /* Schedule Grid */
    .schedule-grid {
        overflow-x: auto;
        padding: 1rem;
    }

    /* Week View */
    .week-view {
        min-width: 900px;
        display: grid;
        grid-template-columns: 80px repeat(7, 1fr);
    }

    .header-cell {
        padding: 0.75rem 0.5rem;
        text-align: center;
        border-bottom: 1px solid #e5e7eb;
        border-right: 1px solid #e5e7eb;
        background-color: white;
        font-size: 0.875rem;
    }

    .header-cell .day-name {
        font-weight: 500;
    }

    .time-cell {
        border-bottom: 1px solid #e5e7eb;
        border-right: 1px solid #e5e7eb;
        padding: 0.5rem;
        background-color: white;
        font-size: 0.75rem;
        color: #6b7280;
    }

    .day-cell {
        border-bottom: 1px solid #e5e7eb;
        border-right: 1px solid #e5e7eb;
        padding: 0.25rem;
        min-height: 50px;
    }

    /* Month View */
    .month-view {
        min-width: 900px;
    }

    .month-view .header-row {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        background-color: white;
    }

    .month-view .week-row {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
    }

    .month-view .day-cell {
        border-bottom: 1px solid #e5e7eb;
        border-right: 1px solid #e5e7eb;
        padding: 0.5rem;
        min-height: 120px;
    }

    .month-view .day-number {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .more-indicator {
        font-size: 0.75rem;
        color: #3b82f6;
        font-weight: 500;
        margin-top: 0.25rem;
    }

    /* Year View */
    .year-view {
        min-width: 900px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        padding: 1rem;
    }

    .month-card {
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        padding: 0.75rem;
    }

    .month-name {
        font-weight: 500;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .mini-calendar {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.25rem;
    }

    .mini-day {
        aspect-ratio: 1/1;
        width: 100%;
        text-align: center;
        font-size: 0.75rem;
        padding: 0.25rem;
    }

    .appointment-count {
        margin-top: 0.5rem;
        font-size: 0.75rem;
        text-align: center;
        color: #3b82f6;
    }

    /* Appointment Card */
    .appointment-card {
        height: 100%;
        width: 100%;
        border-radius: 0.25rem;
        padding: 0.25rem;
    }

    .appointment-card.blue {
        background-color: #dbeafe;
    }

    .appointment-card.yellow {
        background-color: #fef3c7;
    }

    .appointment-card .client {
        font-size: 0.75rem;
        display: flex;
        align-items: center;
    }

    .appointment-card .dot {
        width: 0.5rem;
        height: 0.5rem;
        border-radius: 50%;
        margin-right: 0.25rem;
    }

    .appointment-card .dot.blue {
        background-color: #60a5fa;
    }

    .appointment-card .dot.yellow {
        background-color: #fbbf24;
    }

    .appointment-card .service {
        font-size: 0.75rem;
        color: #4b5563;
    }

    .appointment-card .duration {
        font-size: 0.75rem;
        color: #6b7280;
    }
    .day-cell {
  border-bottom: 1px solid #e5e7eb;
  border-right: 1px solid #e5e7eb;
  padding: 0.25rem;
  min-height: 50px;
  background: rgba(0, 255, 132, 0.35) !important;
  margin: 2px;
}

/* Apply light gray background to cells 3 and 4 */
.day-cell:nth-child(3n),
.day-cell:nth-child(3n+1) {
  background: #F2F2F2 !important;
  margin: 2px;
}


    /* Responsive adjustments */
    @media (max-width: 768px) {
        .schedule {
            margin: 0;
            border-radius: 0;
            border-left: none;
            border-right: none;
        }

        .schedule-header {
            flex-direction: column;
        }

        .schedule-grid {
            padding: 0.5rem;
        }
    }
</style>
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Add Schedule</h4>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="min-h-screen bg-white pb-10">
                                <div class="schedule">
                                    <div class="schedule-header">
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <div class="flex items-center space-x-4">
                                                <h1 class="text-2xl font-semibold">Schedule</h1>
                                                <div class="dropdown">
                                                    <button id="viewModeButton" class="view-mode-button">
                                                        Week
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="ml-1" viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                        </svg>
                                                    </button>
                                                    <div id="viewModeDropdown" class="dropdown-content">
                                                        <a href="#" data-value="week">Week</a>
                                                        <a href="#" data-value="month">Month</a>
                                                        <a href="#" data-value="year">Year</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex space-x-2">
                                                <button id="prevButton" class="nav-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                </button>
                                                <button id="todayButton" class="today-button">Today</button>
                                                <button id="nextButton" class="nav-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="dateDisplay" class="date-display">
                                            May 1-7, 2025
                                        </div>
                                    </div>
                                    <div id="scheduleGrid" class="schedule-grid">
                                        <!-- Schedule grid will be rendered here by JavaScript -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div><!-- container -->

                    <!--Start Rightbar-->
                    <!--Start Rightbar/offcanvas-->

                    <!--end Rightbar/offcanvas-->
                    <!--end Rightbar-->
                    <!--Start Footer-->



                    <!--end footer-->
                </div>
                <!-- end page content -->
            </div><!-- container -->
            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->


            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer-->



            <script>


                const mockData = {
                    days: [
                        { name: "Mon", date: 1 },
                        { name: "Tue", date: 2 },
                        { name: "Wed", date: 3 },
                        { name: "Thu", date: 4 },
                        { name: "Fri", date: 5 },
                        { name: "Sat", date: 6 },
                        { name: "Sun", date: 7 }
                    ],
                    timeSlots: [
                        "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM",
                        "1:00 PM", "2:00 PM", "3:00 PM", "4:00 PM", "5:00 PM"
                    ],
                    appointments: [
                        {
                            id: 1,
                            day: "Mon",
                            startTime: "9:00 AM",
                            duration: 60,
                            client: "John Doe",
                            service: "Haircut",
                            color: "blue"
                        },
                        {
                            id: 2,
                            day: "Wed",
                            startTime: "11:00 AM",
                            duration: 30,
                            client: "Jane Smith",
                            service: "Manicure",
                            color: "yellow"
                        },
                        {
                            id: 3,
                            day: "Fri",
                            startTime: "2:00 PM",
                            duration: 90,
                            client: "Bob Johnson",
                            service: "Massage",
                            color: "blue"
                        },
                        {
                            id: 4,
                            day: "Tue",
                            startTime: "10:00 AM",
                            duration: 45,
                            client: "Alice Brown",
                            service: "Facial",
                            color: "yellow"
                        }
                    ],
                    months: [
                        { name: "January", days: 31 },
                        { name: "February", days: 28 },
                        { name: "March", days: 31 },
                        { name: "April", days: 30 },
                        { name: "May", days: 31 },
                        { name: "June", days: 30 },
                        { name: "July", days: 31 },
                        { name: "August", days: 31 },
                        { name: "September", days: 30 },
                        { name: "October", days: 31 },
                        { name: "November", days: 30 },
                        { name: "December", days: 31 }
                    ]
                };

                // Application state
                let currentViewMode = "week";
                let currentDate = new Date(2025, 4, 1); // May 1, 2025

                // DOM elements
                const scheduleGrid = document.getElementById("scheduleGrid");
                const viewModeButton = document.getElementById("viewModeButton");
                const viewModeDropdown = document.getElementById("viewModeDropdown");
                const prevButton = document.getElementById("prevButton");
                const nextButton = document.getElementById("nextButton");
                const todayButton = document.getElementById("todayButton");
                const dateDisplay = document.getElementById("dateDisplay");

                // Dropdown functionality
                viewModeButton.addEventListener("click", function () {
                    viewModeDropdown.classList.toggle("show");
                });

                // Close the dropdown when clicking outside
                window.addEventListener("click", function (event) {
                    if (!event.target.matches(".view-mode-button") && !event.target.parentNode.matches(".view-mode-button")) {
                        if (viewModeDropdown.classList.contains("show")) {
                            viewModeDropdown.classList.remove("show");
                        }
                    }
                });

                // View mode selection
                document.querySelectorAll("#viewModeDropdown a").forEach(item => {
                    item.addEventListener("click", function (e) {
                        e.preventDefault();
                        currentViewMode = this.getAttribute("data-value");
                        viewModeButton.textContent = currentViewMode.charAt(0).toUpperCase() + currentViewMode.slice(1);
                        viewModeDropdown.classList.remove("show");
                        renderCalendar();
                    });
                });

                // Navigation buttons
                prevButton.addEventListener("click", function () {
                    navigatePrevious();
                    renderCalendar();
                });

                nextButton.addEventListener("click", function () {
                    navigateNext();
                    renderCalendar();
                });

                todayButton.addEventListener("click", function () {
                    currentDate = new Date();
                    renderCalendar();
                });

                // Navigation functions based on view mode
                function navigatePrevious() {
                    switch (currentViewMode) {
                        case "week":
                            currentDate.setDate(currentDate.getDate() - 7);
                            break;
                        case "month":
                            currentDate.setMonth(currentDate.getMonth() - 1);
                            break;
                        case "year":
                            currentDate.setFullYear(currentDate.getFullYear() - 1);
                            break;
                    }
                }

                function navigateNext() {
                    switch (currentViewMode) {
                        case "week":
                            currentDate.setDate(currentDate.getDate() + 7);
                            break;
                        case "month":
                            currentDate.setMonth(currentDate.getMonth() + 1);
                            break;
                        case "year":
                            currentDate.setFullYear(currentDate.getFullYear() + 1);
                            break;
                    }
                }

                // Update date display
                function updateDateDisplay() {
                    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"];

                    switch (currentViewMode) {
                        case "week": {
                            const startDate = new Date(currentDate);
                            // Find the Monday of the current week
                            const day = startDate.getDay();
                            const diff = startDate.getDate() - day + (day === 0 ? -6 : 1); // adjust when day is Sunday
                            startDate.setDate(diff);

                            const endDate = new Date(startDate);
                            endDate.setDate(startDate.getDate() + 6);

                            if (startDate.getMonth() === endDate.getMonth()) {
                                dateDisplay.textContent = `${monthNames[startDate.getMonth()]} ${startDate.getDate()}-${endDate.getDate()}, ${startDate.getFullYear()}`;
                            } else {
                                dateDisplay.textContent = `${monthNames[startDate.getMonth()]} ${startDate.getDate()} - ${monthNames[endDate.getMonth()]} ${endDate.getDate()}, ${startDate.getFullYear()}`;
                            }
                            break;
                        }
                        case "month":
                            dateDisplay.textContent = `${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()}`;
                            break;
                        case "year":
                            dateDisplay.textContent = `${currentDate.getFullYear()}`;
                            break;
                    }
                }

                // Helper function to check if a cell has an appointment
                function getAppointmentForCell(day, time) {
                    return mockData.appointments.find(
                        appointment => appointment.day === day && appointment.startTime === time
                    );
                }

                // Render appointment card
                function renderAppointmentCard(appointment) {
                    const card = document.createElement("div");
                    card.className = `appointment-card ${appointment.color}`;

                    const clientDiv = document.createElement("div");
                    clientDiv.className = "client";

                    const dot = document.createElement("div");
                    dot.className = `dot ${appointment.color}`;

                    const clientName = document.createElement("span");
                    clientName.className = "font-medium";
                    clientName.textContent = appointment.client;

                    clientDiv.appendChild(dot);
                    clientDiv.appendChild(clientName);

                    const serviceDiv = document.createElement("div");
                    serviceDiv.className = "service";
                    serviceDiv.textContent = appointment.service;

                    const durationDiv = document.createElement("div");
                    durationDiv.className = "duration";
                    durationDiv.textContent = `${appointment.duration} mins`;

                    card.appendChild(clientDiv);
                    card.appendChild(serviceDiv);
                    card.appendChild(durationDiv);

                    return card;
                }

                // Render week view
                function renderWeekView() {
                    scheduleGrid.innerHTML = "";
                    scheduleGrid.className = "schedule-grid";

                    const weekView = document.createElement("div");
                    weekView.className = "week-view";

                    // Empty cell for top-left corner
                    const cornerCell = document.createElement("div");
                    cornerCell.className = "header-cell";
                    weekView.appendChild(cornerCell);

                    // Header row with days
                    mockData.days.forEach(day => {
                        const dayCell = document.createElement("div");
                        dayCell.className = "header-cell";

                        const dayName = document.createElement("div");
                        dayName.className = "day-name";
                        dayName.textContent = `${day.name} ${day.date}`;

                        dayCell.appendChild(dayName);
                        weekView.appendChild(dayCell);
                    });

                    // Time slots and appointments
                    mockData.timeSlots.forEach(timeSlot => {
                        // Time column
                        const timeCell = document.createElement("div");
                        timeCell.className = "time-cell";
                        timeCell.textContent = timeSlot;
                        weekView.appendChild(timeCell);

                        // Day cells
                        mockData.days.forEach(day => {
                            const dayCell = document.createElement("div");
                            dayCell.className = "day-cell";

                            const appointment = getAppointmentForCell(day.name, timeSlot);
                            if (appointment) {
                                dayCell.appendChild(renderAppointmentCard(appointment));
                            }

                            weekView.appendChild(dayCell);
                        });
                    });

                    scheduleGrid.appendChild(weekView);
                }

                // Render month view
                function renderMonthView() {
                    scheduleGrid.innerHTML = "";
                    scheduleGrid.className = "schedule-grid";

                    const monthView = document.createElement("div");
                    monthView.className = "month-view";

                    // Header row with day names
                    const headerRow = document.createElement("div");
                    headerRow.className = "header-row";

                    ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].forEach(day => {
                        const dayHeader = document.createElement("div");
                        dayHeader.className = "header-cell";
                        dayHeader.textContent = day;
                        headerRow.appendChild(dayHeader);
                    });

                    monthView.appendChild(headerRow);

                    // Calculate weeks in the month (simplified for mock)
                    const numWeeks = 4; // For simplicity

                    // Create week rows
                    for (let week = 0; week < numWeeks; week++) {
                        const weekRow = document.createElement("div");
                        weekRow.className = "week-row";

                        // Create day cells
                        for (let day = 0; day < 7; day++) {
                            const dayIndex = week * 7 + day;
                            const dayNum = dayIndex + 1;

                            if (dayNum <= 28) { // Simplified for mock
                                const dayCell = document.createElement("div");
                                dayCell.className = "day-cell";

                                const dayNumber = document.createElement("div");
                                dayNumber.className = "day-number";
                                dayNumber.textContent = dayNum;
                                dayCell.appendChild(dayNumber);

                                // Find appointments for this day
                                const dayName = mockData.days[day].name;
                                const dayAppointments = mockData.appointments.filter(appt => appt.day === dayName);

                                // Show first 2 appointments
                                dayAppointments.slice(0, 2).forEach(appointment => {
                                    const appointmentContainer = document.createElement("div");
                                    appointmentContainer.className = "mb-1";
                                    appointmentContainer.appendChild(renderAppointmentCard(appointment));
                                    dayCell.appendChild(appointmentContainer);
                                });

                                // Show "more" indicator if needed
                                if (dayAppointments.length > 2) {
                                    const moreIndicator = document.createElement("div");
                                    moreIndicator.className = "more-indicator";
                                    moreIndicator.textContent = `+${dayAppointments.length - 2} more`;
                                    dayCell.appendChild(moreIndicator);
                                }

                                weekRow.appendChild(dayCell);
                            } else {
                                // Empty cell for days beyond the month
                                const emptyCell = document.createElement("div");
                                emptyCell.className = "day-cell";
                                weekRow.appendChild(emptyCell);
                            }
                        }

                        monthView.appendChild(weekRow);
                    }

                    scheduleGrid.appendChild(monthView);
                }

                // Render year view
                function renderYearView() {
                    scheduleGrid.innerHTML = "";
                    scheduleGrid.className = "schedule-grid";

                    const yearView = document.createElement("div");
                    yearView.className = "year-view";

                    // Create month cards
                    mockData.months.forEach(month => {
                        const monthCard = document.createElement("div");
                        monthCard.className = "month-card";

                        const monthName = document.createElement("div");
                        monthName.className = "month-name";
                        monthName.textContent = month.name;
                        monthCard.appendChild(monthName);

                        // Create mini calendar
                        const miniCalendar = document.createElement("div");
                        miniCalendar.className = "mini-calendar";

                        // Just add placeholder days for the mini calendar
                        for (let i = 0; i < 35; i++) {
                            const miniDay = document.createElement("div");
                            miniDay.className = "mini-day";
                            if (i < month.days) {
                                miniDay.textContent = i + 1;
                            }
                            miniCalendar.appendChild(miniDay);
                        }

                        monthCard.appendChild(miniCalendar);

                        // Appointment count
                        const appointmentCount = document.createElement("div");
                        appointmentCount.className = "appointment-count";

                        // Count appointments that match the first 3 letters of the month
                        const monthPrefix = month.name.substring(0, 3);
                        const count = mockData.appointments.filter(appt => appt.day.includes(monthPrefix)).length;

                        appointmentCount.textContent = `${count} appointments`;
                        monthCard.appendChild(appointmentCount);

                        yearView.appendChild(monthCard);
                    });

                    scheduleGrid.appendChild(yearView);
                }

                // Main render function that decides which view to render
                function renderCalendar() {
                    updateDateDisplay();

                    switch (currentViewMode) {
                        case "week":
                            renderWeekView();
                            break;
                        case "month":
                            renderMonthView();
                            break;
                        case "year":
                            renderYearView();
                            break;
                    }
                }

                // Initialize the application
                document.addEventListener("DOMContentLoaded", function () {
                    renderCalendar();
                });

            </script>



            <?php include 'partials/footer.php'; ?>