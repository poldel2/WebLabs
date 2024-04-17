function getCurrentDateTime() {
    var now = new Date();
    return now.toLocaleString();
  }

  function getSessionHistory() {
    var sessionHistory = JSON.parse(localStorage.getItem('sessionHistory')) || {};
    return sessionHistory;
  }

  function savePageViewToSessionHistory(page) {
    var sessionHistory = getSessionHistory();
  
    if (sessionHistory[page]) {
      sessionHistory[page]++;
    } else {
      sessionHistory[page] = 1;
    }
  
    localStorage.setItem('sessionHistory', JSON.stringify(sessionHistory));
  }

  savePageViewToSessionHistory(document.title);
  savePageViewToAllTimeHistory(document.title);