// document.addEventListener('DOMContentLoaded', function () {
//     var revenueCtx = document.getElementById('revenueChart').getContext('2d');
//     var revenueChart = new Chart(revenueCtx, {
//         type: 'bar',
//         data: {
//             labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
//             datasets: [{
//                 label: 'Revenue',
//                 data: [1200, 1500, 1000, 1700, 1300, 1900],
//                 backgroundColor: 'rgba(92, 103, 242, 0.5)',
//                 borderColor: 'rgba(92, 103, 242, 1)',
//                 borderWidth: 1
//             }]
//         }
//     });

//     var careReportCtx = document.getElementById('careReportChart').getContext('2d');
//     var careReportChart = new Chart(careReportCtx, {
//         type: 'line',
//         data: {
//             labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
//             datasets: [{
//                 label: 'Care Reports',
//                 data: [150, 200, 170, 220, 250, 300],
//                 backgroundColor: 'rgba(255, 99, 132, 0.5)',
//                 borderColor: 'rgba(255, 99, 132, 1)',
//                 borderWidth: 1
//             }]
//         }
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    var revenueCtx = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [1200, 1500, 1000, 1700, 1300, 1900],
                backgroundColor: 'rgba(225, 126, 42, 0.5)',
                borderColor: 'rgba(225, 126, 42, 1)',
                borderWidth: 1
            }]
        }
    });

    var careReportCtx = document.getElementById('careReportChart').getContext('2d');
    var careReportChart = new Chart(careReportCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Care Reports',
                data: [150, 200, 170, 220, 250, 300],
                backgroundColor: 'rgba(245, 240, 230, 0.5)',
                borderColor: 'rgba(245, 240, 230, 1)',
                borderWidth: 1
            }]
        }
    });
});


