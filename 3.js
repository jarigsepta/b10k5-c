const count_vowels = str => {
  const helper = ['a', 'e', 'i', 'o', 'u'];

  const hash = {};

  for (let c of str) {
    if (helper.indexOf(c) !== -1) {
      if (hash[c]) {
        hash[c]++;
      } else {
        hash[c] = 1;
      }
    }
  }

  let count = 0;
  for (let k in hash) {
    count += hash[k];
  }

  return count;
};

console.log(count_vowels('programmer'));
console.log(count_vowels('hmm..'));