<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<main class="row row-cols-3">
    <div class="col col-4">
        <h1>Financat e Hotelit</h1>
        <div id="chartDiv"></div>
    </div>

    <div class="col col-4">
        <h1>Financat e Restorantit</h1>
        <div id="chartDiv2"></div>
    </div>

    <form class="h-100 align-self-start">
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
            </div>
        </div>
    </form>

    <div class="col col-4">
        <h1>Financat e Plazhit(?)</h1>
        <div id="chartDiv3"></div>
    </div>

    <div class="col col-4 mx">
        <h1>Fitime/Humbje</h1>
        <div id="chartDiv4"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>

    
</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>

<script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
   
    <script>
        var chart = JSC.chart("chartDiv", {
            type: "line",
            legend_visible: true,
            defaultPoint_marker_type: "circle",
            defaultSeries_firstPoint: { label_text: "%seriesName" },
            series: [
                {
                    name: "Hollow Centers",
                    line_width: 3,
                    defaultPoint_marker: {
                        fill: "white",
                        outline_width: 3
                    },
                    points: getPoints(3)
                },
                {
                    name: "Visual Breaks",
                    defaultPoint_marker: {
                        size: 12,
                        outline: { width: 3, color: "white" }
                    },
                    points: getPoints(2)
                },
                {
                    name: "Subtle",
                    defaultPoint_marker: {
                        size: 7,
                        fill: "white",
                        outline: { width: 1 }
                    },
                    points: getPoints(1)
                },
                {
                    name: "Tiny",
                    defaultPoint_marker: { size: 3 },
                    points: getPoints(0)
                }
            ],
            legend_visible: false,
            yAxis_label_text: "Count",
            legend_position: "bottom right",
            xAxis: {
                crosshair_enabled: true,
                scale_type: "time"
            },
            defaultAxis: {
                defaultTick_gridLine_visible: false,
                alternateGridFill: "none"
            }
        });
        document.getElementById(chartDiv).

        function getPoints(i) {
            var extraY = i * 20;
            var points = [
                { x: "1/1/2020", y: 65 },
                { x: "2/1/2020", y: 67 },
                { x: "3/1/2020", y: 72 },
                { x: "4/1/2020", y: 66 },
                { x: "5/1/2020", y: 84 },
                { x: "6/1/2020", y: 74 },
                { x: "7/1/2020", y: 72 },
                { x: "8/1/2020", y: 84 }
            ];
            return points.map(function (p) {
                return { x: p.x, y: p.y + extraY };
            });
        }

        var chart2 = JSC.chart("chartDiv2", {
            type: "line",
            legend_visible: true,
            defaultPoint_marker_type: "circle",
            defaultSeries_firstPoint: { label_text: "%seriesName" },
            series: [
                {
                    name: "Hollow Centers",
                    line_width: 3,
                    defaultPoint_marker: {
                        fill: "white",
                        outline_width: 3
                    },
                    points: getPoints(3)
                },
                {
                    name: "Visual Breaks",
                    defaultPoint_marker: {
                        size: 12,
                        outline: { width: 3, color: "white" }
                    },
                    points: getPoints(2)
                },
                {
                    name: "Subtle",
                    defaultPoint_marker: {
                        size: 7,
                        fill: "white",
                        outline: { width: 1 }
                    },
                    points: getPoints(1)
                },
                {
                    name: "Tiny",
                    defaultPoint_marker: { size: 3 },
                    points: getPoints(0)
                }
            ],
            legend_visible: false,
            yAxis_label_text: "Count",
            legend_position: "bottom right",
            xAxis: {
                crosshair_enabled: true,
                scale_type: "time"
            },
            defaultAxis: {
                defaultTick_gridLine_visible: false,
                alternateGridFill: "none"
            }
        });

        var chart3 = JSC.chart("chartDiv3", {
            type: "pie",
            yAxis_label_text: "Count",
            legend_position: 'bottom right',
            xAxis_scale_type: "time",
            series: [
                {
                    name: "Sales",
                    points: [
                        { x: "1/1/2020", y: 50 },
                        { x: "2/1/2020", y: 67 },
                        { x: "3/1/2020", y: 72 },
                        { x: "4/1/2020", y: 76 },
                        { x: "5/1/2020", y: 84 }
                    ]
                }
            ]
        });

        var char4 = JSC.chart('chartDiv4', {
            debug: true,
            type: 'horizontalColumn',
            title_label_text: 'Acme Tool Sales',
            yAxis: { label_text: 'Units Sold' },
            xAxis_label_text: 'Quarter',
            series: [
                {
                    name: 'Saw',
                    id: 's1',
                    points: [
                        { x: 'Q1', y: 230 },
                        { x: 'Q2', y: 240 },
                        { x: 'Q3', y: 267 },
                        { x: 'Q4', y: 238 }
                    ]
                },
                {
                    name: 'Hammer',
                    points: [
                        { x: 'Q1', y: 325 },
                        { x: 'Q2', y: 367 },
                        { x: 'Q3', y: 382 },
                        { x: 'Q4', y: 371 }
                    ]
                },
                {
                    name: 'Grinder',
                    points: [
                        { x: 'Q1', y: 285 },
                        { x: 'Q2', y: 292 },
                        { x: 'Q3', y: 267 },
                        { x: 'Q4', y: 218 }
                    ]
                },
                {
                    name: 'Drill',
                    points: [
                        { x: 'Q1', y: 185 },
                        { x: 'Q2', y: 192 },
                        { x: 'Q3', y: 198 },
                        { x: 'Q4', y: 248 }
                    ]
                }
            ]
        });

    </script>