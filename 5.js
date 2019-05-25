let myStr = 'purwakarta';

String.prototype.replaceAll = function(search, replacement) {
  var target = this;
  return target.split(search).join(replacement);
};

console.log(myStr.replaceAll('a', 'o'));