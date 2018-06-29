var data = {
  "CAR": {
    "COLOR": "RED",
    "ID": "41.203.65.171",
    "rating": 5
  },
  "BIKE": {
    "COLOR": "BLUE",
    "ID": "41.203.65.171",
    "rating": 8
  },
  "PLANE": {
    "COLOR": "RED",
    "ID": "41.203.65.171",
    "rating": 3
  }
};
var count = 0;
jQuery.each(data, function (key, value) {
    if (value["COLOR"] == "RED") {
        console.log("The "+key+" is red");
        count++;
    }
});
console.log(count);