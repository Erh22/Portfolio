
//篩選功能
function change() {
    var modelCbs = document.querySelectorAll(".models input[type='checkbox']");
    var processorCbs = document.querySelectorAll(".processors input[type='checkbox']");
    var filters = {
      models: getClassOfCheckedCheckboxes(modelCbs),
      processors: getClassOfCheckedCheckboxes(processorCbs)
    };
  
    filterResults(filters);
  }
  
  function getClassOfCheckedCheckboxes(checkboxes) {
    var classes = [];
  
    if (checkboxes && checkboxes.length > 0) {
      for (var i = 0; i < checkboxes.length; i++) {
        var cb = checkboxes[i];
  
        if (cb.checked) {
          classes.push(cb.getAttribute("rel"));
        }
      }
    }
  
    return classes;
  }
  
  function filterResults(filters) {
    var rElems = document.querySelectorAll(".result div");
    var hiddenElems = [];
  
    if (!rElems || rElems.length <= 0) {
      return;
    }
  
    for (var i = 0; i < rElems.length; i++) {
      var el = rElems[i];
  
      if (filters.models.length > 0) {
        var isHidden = true;
  
        for (var j = 0; j < filters.models.length; j++) {
          var filter = filters.models[j];
  
          if (el.classList.contains(filter)) {
            isHidden = false;
            break;
          }
        }
  
        if (isHidden) {
          hiddenElems.push(el);
        }
      }
  
      if (filters.processors.length > 0) {
        var isHidden = true;
  
        for (var j = 0; j < filters.processors.length; j++) {
          var filter = filters.processors[j];
  
          if (el.classList.contains(filter)) {
            isHidden = false;
            break;
          }
        }
  
        if (isHidden) {
          hiddenElems.push(el);
        }
      }
    }
  
    for (var i = 0; i < rElems.length; i++) {
      rElems[i].style.display = "block";
    }
  
    if (hiddenElems.length <= 0) {
      return;
    }
  
    for (var i = 0; i < hiddenElems.length; i++) {
      hiddenElems[i].style.display = "none";
    }
  }

//loading
function onReady(callback) {
  var intervalId = window.setInterval(function () {
      if (document.getElementsByTagName('body')[0] !== undefined) {
          window.clearInterval(intervalId);
          callback.call(this);
      }
  }, 1000);
}
function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}
onReady(function () {
  setVisible('.load', true);
  setVisible('#loading', false);
});

//進場淡入淡出
$(document).ready(function() {
  $('body').css('display', 'none');
  $('body').fadeIn(2000); //一開始淡入
  $('a.link').click(function(event) { //點選 class 為 link 的 a 元件時觸發
   event.preventDefault(); //取消事件預設動作
   newLocation = this.href;
   $('body').fadeOut(1000, newpage); //點選後淡出
  });
  
  function newpage() {
   window.location = newLocation;
  }
 });


 
