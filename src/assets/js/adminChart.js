var starts=[(135850),52122,148825,16939,9763,91934,12137];
var frameworks=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
var techn=['Experiments','challanges','Projects'];
var techdata=[12,31,3];

var ctx= document.getElementById("myChart");
var pies= document.getElementById("mypie");
var lines= document.getElementById("linegraph");
var line2=document.getElementById('line21');
var bar1 = document.getElementById('bar1')
var bar123= document.getElementById('brsz')

var mychart=new Chart(ctx,{
    type:'bar',
    data:{
        labels:frameworks,
        datasets:[{
            label:'Total subscribers per day',
            data: starts,
            backgroundColor:[
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
                'rgba(75,192,192,0.2)',
                'rgba(153,102,255,0.2)',
                'rgba(13,55,255,0.2)',
                'rgba(245,12,255,0.2)'
            ],
            borderColor:[
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(75,192,192,1)',
                'rgba(153,102,255,1)',
                'rgba(13,55,255,1)',
                'rgba(245,12,255,1)'
            ],
            borderWidth:1,
            body:'rgba(255,79,132,1)'
        }]
    },
    options:{
        responsive:true,
        title:{
            display:true,
            text:'Weekly Subscribes Analysis'
        },
        tooltips:{
            mode:'label'
        },
        hover:{
            mode: 'nearest',
            intersect:true,
        },
        scales:{
            xAxes:[{
                display: true,
                ticks:{
                    userCallback:function (label,index,labels) {
                        if (typeof label==='string'){
                            return label.substring(0,8)
                        }
                        return label
                    },
                },
                scaleLabel:{
                    display:true,
                    labelString: 'Days'
                }
            }],
            yAxes:[{
                display:true,
                scaleLabel: {
                    display:true,
                    labelString: 'Subscribes'
                }
            }]
        }
    }
});


var line= new Chart(lines,{
    type:'line',
    data:{
        labels:['January','February','March','April','May','June','July','August','September','October','November','December'],
        datasets:[{
            label:'Line graph',
            data:[100,43,54,120,90,139,68,100,143,10,75,98],
            label:'This month',
            backgroundColor:'rgba(255,99,132,0.2)',
            borderColor:'rgba(255,99,132,1)',
            borderWidth:1
         },{
            data: [70,90,44,6,83,90,10,1,6,40,12,90],
            label: 'Last Month',
            backgroundColor: 'rgb(60,186,159,0.2)',
            borderColor: 'rgb(60,189,159,1)',
            borderWidth: 1
        }
        ]
        
    },
    options:{
        responsive:true,
        title:{
            display:true,
            text:'Annual Activity Analysis'
        },
        tooltips:{
            mode:'label'
        },
        hover:{
            mode: 'nearest',
            intersect:true,
        },
        scales:{
            xAxes:[{
                display: true,
                ticks:{
                    userCallback:function (label,index,labels) {
                        if (typeof label==='string'){
                            return label.substring(0,10)
                        }
                        return label
                    },
                },
                scaleLabel:{
                    display:true,
                    labelString: 'Month(s)'
                }
            }],
            yAxes:[{
                display:true,
                scaleLabel: {
                    display:true,
                    labelString: 'Total Activity'
                }
            }]
        }
    }
})

var line21=new Chart(line2,{
    type:'line',
    data:{
        labels:['sunday','monday','tuesday','wednesday','thursday','friday','saturday'],
        datasets:[{
            data:[86,114,106,108,107,111,133],
            label:'total',
            backgroundColor:'rgb(62,149,205,0.2',
            borderColor:'rgb(62,149,205,1)',
            borderWidth:2
        },{
            data: [70,90,44,60,83,90,100],
            label: 'Accepted',
            backgroundColor: 'rgb(60,186,159,0.2)',
            borderColor: 'rgb(60,189,159,1)',
            borderWidth: 1
        },{
            data:[120,100,95,77,62,80,115],
            label: "Pending",
            backgroundColor: 'rgb(255,165,0,0.2)',
            borderColor: 'rgb(255,165,0)',
            borderWidth: 1
        },{
            data: [80,75,85,90,70,30,35],
            label: 'Rejected',
            backgroundColor: 'rgb(196,88,80,0.2)',
            borderColor: 'rgb(196,88,80)',
            borderWidth: 1
        }]
    },
    options:{
        responsive:true,
        title:{
            display:true,
            text:'Weekly Analysis'
        },
        tooltips:{
            mode:'label'
        },
        hover:{
            mode: 'nearest',
            intersect:true,
        },
        scales:{
            xAxes:[{
                display: true,
                ticks:{
                    userCallback:function (label,index,labels) {
                        if (typeof label==='string'){
                            return label.substring(0,5)
                        }
                        return label
                    },
                },
                scaleLabel:{
                    display:true,
                    labelString: 'Days'
                }
            }],
            yAxes:[{
                display:true,
                scaleLabel: {
                    display:true,
                    labelString: 'total activity'
                }
            }]
        }
    }
});


var brszs= new Chart(bar123,{
    type:'bar',
    data:{
        labels:techn,
        datasets:[{
            label:'Uploads',
            data: techdata,
            backgroundColor:[
                'rgb(19,51,91,0.6)',
                'rgb(247,193,34,0.7)',
                'rgb(157,37,37,0.5)'
            ],
            borderColor:[
                'rgb(19,51,91,1)',
                'rgb(247,193,34,1)',
                'rgb(157,37,37,1)'
            ],
            borderWidth:1,
            body:'rgba(255,79,132,1)'
        }]
    },
    options:{
        responsive:true,
        title:{
            display:true,
            text:'Uploads For this week'
        },
        tooltips:{
            mode:'label'
        },
        hover:{
            mode: 'nearest',
            intersect:true,
        },
        scales:{
            xAxes:[{
                display: true,
                ticks:{
                    userCallback:function (label,index,labels) {
                        if (typeof label==='string'){
                            return label.substring(0,4)
                        }
                        return label
                    },
                },
                scaleLabel:{
                    display:true,
                    labelString: 'Frameworks'
                }
            }],
            yAxes:[{
                display:true,
                scaleLabel: {
                    display:true,
                    labelString: 'total uploads'
                }
            }]
        }
    }
})
