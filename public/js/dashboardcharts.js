var carehomecounts = [];
var residentcounts = [];
var residentpercarehome = [];

var weekonecarehomes = [];
var weektwocarehomes = [];
var weekthreecarehomes = [];
var weekfourcarehomes = [];

var carehomeperweek = [];
var residentperweek = [];

data.forEach(carehome => {
    carehomecounts[carehome['week']] = (carehomecounts[carehome['week']] || 0) + 1;
    residentcounts[carehome['week']] = (residentcounts[carehome['week']] || 0) + carehome['total_patients'];
    residentpercarehome[carehome['name']] = carehome['total_patients'];

    if(carehome['week'] == 1){
        carehomeperweek[0] = (carehomecounts[carehome['week']] || 0) + 1;
        residentperweek[0] = (residentcounts[carehome['week']] || 0) + carehome['total_patients'];
        weekonecarehomes.push([
            carehome['name'], carehome['total_patients']
        ]);
    }
    if(carehome['week'] == 2){
        carehomeperweek[1] = (carehomecounts[carehome['week']] || 0) + 1;
        residentperweek[1] = (residentcounts[carehome['week']] || 0) + carehome['total_patients'];
        weektwocarehomes.push([
            carehome['name'], carehome['total_patients']
        ]);
    }
    if(carehome['week'] == 3){
        carehomeperweek[2] = (carehomecounts[carehome['week']] || 0) + 1;
        residentperweek[2] = (residentcounts[carehome['week']] || 0) + carehome['total_patients'];
        weekthreecarehomes.push([
            carehome['name'], carehome['total_patients']
        ]);
    }
    if(carehome['week'] == 4){
        carehomeperweek[3] = (carehomecounts[carehome['week']] || 0) + 1;
        residentperweek[3] = (residentcounts[carehome['week']] || 0) + carehome['total_patients'];
        weekfourcarehomes.push([
            carehome['name'], carehome['total_patients']
        ]);
    }
});

////////////////////////------------------------ Pie Chart -----------------------//////////////////////

window.piechart = new Highcharts.chart('piechart', {
    chart: {
        type: 'pie',
        backgroundColor: '#1e293b',
        height:'100%',
    },
    title: {
        text: 'Carehomes per week',
        style: {
            color:'#fff',
            fontweight: 'bold',
        },
    },
    subtitle: {
        text: 'View in fullscreen for better experience',
        style: {
            color:'#fff',
        },
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '|'
        }
    },

    // default color sequence goes here
    colors:[
        "#e4d354", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#7cb5ec", "#2b908f", "#f45b5b", "#91e8e1", "#A569BD",
        "#DC7633", "#138D75", "#34495E", "#F5B7B1", "#52BE80", "#F1948A ", "#D98880", "#AF7AC5", "#717D7E", "#f7a35c",
        "#E6B0AA", "#AED6F1", "#A9DFBF", "#F7DC6F", "#85929E", "#D7BDE2", "#76D7C4", "#EDBB99", "#7cb5ec", "#f7a35c",
    ],


    plotOptions: {
        series: {
            dataLabels: {
                enabled: false,
                format: '<span style="all:initial; text-decoration:none; color:{point.color};">{point.name}: {point.y:1f} residents</span>',
                shadow: false,
            },
            showInLegend:true,
        }
    },

    legend:{
        labelFormat:'<span style="color:#fff;">{name}</span>'
    },

    credits:{
        enabled:false,
    },

    tooltip: {
        backgroundColor:'#222',
        style:{
            color:'#fff',
        },
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: has <b>{point.y:1f} residents </b> <br/>'
    },

    exporting:{
        buttons: {
            contextButton:{
                symbol: 'menuball',
                theme:{
                    fill:'#1e293b',
                },
                symbolFill:'#fff',
                menuItems: ['viewFullscreen', 'printChart', 'separator', 'downloadPNG', 'downloadJPEG', 'downloadPDF', 'viewDataTable'],
            },
        },
    },

    series: [
        {
            name: "Carehomes",
            colorByPoint: true,
            data: [
                {
                    name: "Week 1",
                    y: residentcounts[1],
                    drilldown: "Week 1"
                },
                {
                    name: "Week 2",
                    y: residentcounts[2],
                    drilldown: "Week 2"
                },
                {
                    name: "Week 3",
                    y: residentcounts[3],
                    drilldown: "Week 3"
                },
                {
                    name: "Week 4",
                    y: residentcounts[4],
                    drilldown: "Week 4"
                },
            ]
        }
    ],
    drilldown: {
        activeDataLabelStyle:{
            color:'#003399',
            cursor:'pointer',
            fontWeight:'bold',
            textDecoration:'underline',
            },
        breadcrumbs: {
            showFullPath: true,
            format: '<span style="color:#f0f">Go to {level.name}</span>'
        },

        series: [
            {
                name: "Week 1",
                id: "Week 1",
                data: weekonecarehomes,

            },
            {
                name: "Week 2",
                id: "Week 2",
                data: weektwocarehomes
            },
            {
                name: "Week 3",
                id: "Week 3",
                data: weekthreecarehomes
            },
            {
                name: "Week 4",
                id: "Week 4",
                data: weekfourcarehomes
            },

        ]
    }
});


////////////////////////------------------------ Bar Chart -----------------------//////////////////////
window.barchart = new Highcharts.chart('barchart', {

    chart: {
        type: 'column',
        styledMode: false,
    },

    title: {
        text: 'Residents with Carehomes per week'
    },

    yAxis: [{
        className: 'highcharts-color-0',
        title: {
            text: 'Number of carehomes'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: true,
        title: {
            text: 'Number of Residents'
        }
    }],

    xAxis:{
        categories: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
    },

    plotOptions: {
        column: {
            borderRadius: 5
        }
    },

    series: [{
        name: 'Carehomes',
        data: carehomeperweek
    }, {
        name: 'Residents',
        data: residentperweek,
        yAxis: 1
    }]

});
