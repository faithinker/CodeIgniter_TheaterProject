var width = 700,
    height = 700,
    initialScale = 5500,
    initialX = -11900,
    initialY = 4050,
    centered,
    labels;

var projection = d3.geo.mercator()
    .scale(initialScale)
    .translate([initialX, initialY]);

var path = d3.geo.path()
    .projection(projection);

var zoom = d3.behavior.zoom()
    .translate(projection.translate())
    .scale(projection.scale())
    .scaleExtent([height, 800 * height])
    .on("zoom", zoom);

var svg = d3.select("#container").append("svg")
    .attr("width", width)
    .attr("height", height)
    .attr('id', 'map');

var states = svg.append("g")
    .attr("id", "states")
    .call(zoom);

states.append("rect")
    .attr("class", "background")
    .attr("width", width)
    .attr("height", height);

d3.json("data/korea.json", function(json) {
  states.selectAll("path")
      .data(json.features)
    .enter().append("path")
      .attr("d", path)
      .attr("id", function(d) { return 'path-'+d.id; })
      .on("click", click);
      
  labels = states.selectAll("text")
    .data(json.features)
    .enter().append("text")
      .attr("transform", labelsTransform)
      .attr("id", function(d) { return 'label-'+d.id; })
      .attr('text-anchor', 'middle')
      .attr("dy", ".35em")
      .on("click", click)
      .text(function(d) { return d.properties.Name; });
});

function click(d) {
  var x, y, k;

  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = centroid[0];
    y = centroid[1];
    k = 4;
    centered = d;
  } else {
    x = width / 2;
    y = height / 2;
    k = 1;
    centered = null;
  }

  states.selectAll("path")
      .classed("active", centered && function(d) { return d === centered; });

  states.transition()
      .duration(1000)
      .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
      .style("stroke-width", 1.5 / k + "px");
}

function zoom() {
  projection.translate(d3.event.translate).scale(d3.event.scale);
  states.selectAll("path").attr("d", path);
  
  labels.attr("transform", labelsTransform);
}

function labelsTransform(d) {
  console.log(path.centroid(d));

  // 寃쎄린�꾧� �쒖슱�밸퀎�쒖� 寃뱀퀜�� �덉쇅 泥섎━
  if (d.id == 8) {
    var arr = path.centroid(d);
    arr[1] += (d3.event && d3.event.scale) ? (d3.event.scale / height + 20) : (initialScale / height + 20);
    
    return "translate(" + arr + ")";
  } else {
    return "translate(" + path.centroid(d) + ")";
  }
}



// 踰꾪듉
$('#radio').buttonset();
$('#zoomin').button({
  text: false,
  icons: {
    primary: "ui-icon-plus"
  }
}).click(function() {
  var arr = projection.translate(),
      scale = projection.scale();
      
  arr[0] = arr[0] * 1.2;
  arr[1] = arr[1] * 1.2;
  scale = scale * 1.2;
  
  projection.translate(arr).scale(scale);
  states.selectAll("path").attr("d", path);
  
  labels.attr("transform", labelsTransform);
});
$('#zoomout').button({
  text: false,
  icons: {
    primary: "ui-icon-minus"
  }
}).click(function() {
  var arr = projection.translate(),
      arr2 = projection.translate(),
      scale = projection.scale();
      
  arr[0] = arr[0] * 0.8;
  arr[1] = arr[1] * 0.8;
  scale = scale * 0.8;
  
  projection.translate(arr).scale(scale);
  states.selectAll("path").attr("d", path);
  
  labels.attr("transform", labelsTransform);
});
      
// 吏�紐낇몴��
$('#radio').find('input').on('click', function() {
  if (this.value == 'on') {
    labels.style('display', 'block');
  } else if (this.value == 'off') {
    labels.style('display', 'none');
  }
});


//http://xuchen-81.appspot.com/growth/js/signup_growth.min.js
$(function(){var a=[{date:"05/01",all:100,sampleapp:65},{date:"05/02",all:200,sampleapp:25},{date:"05/03",all:40,sampleapp:25},{date:"05/04",all:30,sampleapp:15},{date:"05/05",all:20,sampleapp:5},{date:"05/06",all:145,sampleapp:88},{date:"05/07",all:150,sampleapp:45},{date:"05/08",all:132,sampleapp:68},{date:"05/09",all:128,sampleapp:89},{date:"05/10",all:119,sampleapp:100},{date:"05/11",all:130,sampleapp:120},{date:"05/12",all:121,sampleapp:97},{date:"05/13",all:15,sampleapp:10},{date:"05/14",all:188,sampleapp:45},{date:"05/15",all:100,sampleapp:65},{date:"05/16",all:200,sampleapp:25},{date:"05/17",all:40,sampleapp:25},{date:"05/18",all:150,sampleapp:45},{date:"05/19",all:132,sampleapp:68},{date:"05/20",all:128,sampleapp:89},{date:"05/21",all:119,sampleapp:100},{date:"05/22",all:130,sampleapp:120},{date:"05/23",all:121,sampleapp:97},{date:"05/24",all:15,sampleapp:10},{date:"05/25",all:290,sampleapp:45},{date:"05/26",all:134,sampleapp:65},{date:"05/27",all:126,sampleapp:76},{date:"05/28",all:47,sampleapp:35},{date:"05/29",all:123,sampleapp:123},
{date:"05/30",all:119,sampleapp:43},{date:"05/31",all:198,sampleapp:45}],
      t = {
          top: 40,
          right: 20,
          bottom: 30,
          left: 40
      },
      e = 960 - t.left - t.right,
      l = 500 - t.top - t.bottom,
      p = ["linear", "cardinal", "monotone"],
      r = p[Math.floor(Math.random() * p.length)],
      n = "#0fa56b",
      s = .25,
      d = .5,
      o = 5,
      i = 1500,
      m = "#edb590",
      f = d3.scale.ordinal().rangeBands([0, e], s, d),
      c = d3.scale.linear().range([l, 0]),
      u = d3.svg.axis().scale(f).orient("bottom"),
      h = d3.svg.axis().scale(c).orient("left").ticks(20),
      g = d3.tip().attr("class", "d3-tip").offset([-10, 0]).html(function(a) {
          return "<strong style='font-size:12px;'>Sample App:</strong> <span style='color:red;font-size:12px;'>" + a.sampleapp + "</span>"
      }),
      x = d3.select("body").append("svg").attr("width", e + t.left + t.right).attr("height", l + t.top + t.bottom).append("g").attr("transform", "translate(" + t.left + "," + t.top + ")");
  x.call(g), f.domain(a.map(function(a) {
      return a.date
  })), c.domain([0, d3.max(a, function(a) {
      return a.all
  })]), x.append("g").attr("class", "x axis").attr("transform", "translate(0," + l + ")").call(u), x.append("g").attr("class", "y axis").call(h).append("text").attr("transform", "rotate(-90)").attr("y", 6).attr("dy", ".71em").style("text-anchor", "end").text("Daily Signup");
  var y = x.selectAll(".bar").data(a).enter().append("rect").attr("class", "bar").attr("x", function(a) {
      return f(a.date)
  }).attr("fill", m).attr("width", f.rangeBand()).attr("y", function() {
      return l
  }).attr("height", function() {
      return 0
  }).on("dblclick", function(a) {
      console.log(a.date)
  }).on("mouseover", g.show).on("mouseout", g.hide);
  y.transition().duration(i).attr("y", function(a) {
      return c(a.sampleapp)
  }).attr("height", function(a) {
      return l - c(a.sampleapp)
  });
  var k = d3.svg.line().interpolate(r).x(function(a) {
          return f(a.date) + f.rangeBand() / 2
      }).y(function(a) {
          return c(a.all)
      }),
      b = d3.svg.line().interpolate(r).x(function(a) {
          return f(a.date) + f.rangeBand() / 2
      }).y(function(a) {
          return c(a.sampleapp)
      }),
      v = x.append("path").attr("d", k(a)).attr("stroke", "steelblue").attr("stroke-width", o).attr("fill", "none"),
      w = v.node().getTotalLength();
  v.attr("stroke-dasharray", w + " " + w).attr("stroke-dashoffset", w).transition().duration(i).ease("linear").attr("stroke-dashoffset", 0);
  var B = x.append("path").attr("d", b(a)).attr("stroke", n).attr("stroke-width", o).attr("fill", "none"),
      w = B.node().getTotalLength();
  B.attr("stroke-dasharray", w + " " + w).attr("stroke-dashoffset", w).transition().duration(i).ease("linear").attr("stroke-dashoffset", 0)
});