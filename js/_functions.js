function shuffle(array) {
  let currentIndex = array.length,
    randomIndex;

  // While there remain elements to shuffle...
  while (currentIndex != 0) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex],
      array[currentIndex],
    ];
  }

  return array;
}

function randomNumber(min, max) {
  return Math.random() * (max - min) + min;
}

function getRadioValue(name) {
  var ele = document.getElementsByName(name);

  for (var i = 0; i < ele.length; i++) {
    if (ele[i].checked) return ele[i].value;
  }
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

export { shuffle, randomNumber, getRadioValue, getCookie };
