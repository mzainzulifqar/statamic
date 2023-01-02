<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAP</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['geochart'],
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['State', 'Select', {role: 'tooltip', p:{html:true}}],
                ['AL', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AK', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AZ', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AR', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['CA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['CO', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['CT', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['DE', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['DC', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['FL', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['GA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['HI', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['ID', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['IL', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['IN', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['IA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['KS', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['KY', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['LA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['ME', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MD', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MI', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MN', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MS', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MO', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MT', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NE', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NV', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NH', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NJ', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NM', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NY', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['NC', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['ND', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['OH', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['OK', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['OR', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['PA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['RI', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['SC', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['SD', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['TN', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['TX', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['UT', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['VT', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['VA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['WA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['WV', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['WI', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['WY', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],

                // Commonwealth/Territory and Military
                ['AS', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['DC', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['FM', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['GU', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MH', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['MP', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['PW', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['PR', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['VI', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AA', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AE', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
                ['AP', 0,'<a href="#">Northwestern  Mutual Credit Union</a><br><p>Ronald McDonold House Chafitio.s® ot Eastern Wiseonsir</p>'],
            ]);

            var options = {
                region: 'US',
                displayMode: 'regions',
                resolution: 'provinces',
                colors: ['#0050EE'],
                displayMode: 'text',
                tooltip: {
                    isHtml: true
                }
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
</body>

</html>
