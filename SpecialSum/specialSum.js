
function specialSum(k, n) {
  let data = {};

  for (var i = 0; i <= k; i++) {
    for (let j = 0; j <= n; j++) {
      if (!data[i + ":" + j]) {
        data[i + ":" + j] = calculate(i, j, data);
      }
    }
  }

  let sum = 0;
  for (m = 1; m <= n; m++) {
    sum += data[k - 1 + ":" + m];
  }
    return sum;
}

const array_sum = (array) => array.reduce((data, el) => data + el, 0)

const range = (start, end) => {
  let result = [];
  for (let i = start; i <= end; i++) {
    result.push(i);
  }
  return result;
};

const calculate = (i, j, data) => {
  if (i == 0) {
    return j;
  }
  if (j == 1) {
    return 1;
  }
  if (i == 1) {
    return array_sum(range(1, j));
  }
  sum = 0;
  for (l = 1; l <= j; l++) {
    key = i - 1 + ":" + l;
    if (!(key[data])) {
      sum += data[i - 1 + ":" + l];
    }
  }
  return sum;
}

console.log(specialSum(10, 10));