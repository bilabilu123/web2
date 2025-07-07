    </div> <!-- end container -->
</div> <!-- end wrapper -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctxA = document.getElementById('areaChart').getContext('2d');
new Chart(ctxA, {
    type: 'line',
    data: {
        labels: ['Mar 1', 'Mar 3', 'Mar 5', 'Mar 7', 'Mar 9', 'Mar 11', 'Mar 13'],
        datasets: [{
            label: 'Kinerja',
            data: [10000, 32000, 20000, 31000, 28000, 34000, 39000],
            borderColor: 'blue',
            backgroundColor: 'rgba(0, 123, 255, 0.1)',
            fill: true
        }]
    }
});

const ctxB = document.getElementById('barChart').getContext('2d');
new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Laba',
            data: [4000, 5000, 6000, 8000, 10000, 15000],
            backgroundColor: 'blue'
        }]
    }
});
</script>
</body>
</html>
