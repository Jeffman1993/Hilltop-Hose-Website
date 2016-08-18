<script>

var a = [];

a[1] = 'banana';
a[6] = 'afsdag';
a[8] = 'adsa';

delete a[6];

for (var key in a) {
    console.log(a[key]);
    console.log(key);
}

</script>