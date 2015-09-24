QUnit.test( "hello test", function( assert ) {
  assert.ok( 1 == "1", "Passed!" );
});

// Let's test this function
function isEven(val) {
    return val % 2 === 0;
}

test('isEven()', function() {
    ok(isEven(0), 'Zero is an even number');
    ok(isEven(2), 'So is two');
    ok(isEven(-4), 'So is negative four');
    ok(!isEven(1), 'One is not an even number');
    ok(!isEven(-7), 'Neither is negative seven');

    ok(isEven(3), 'Three is an even number');
})

test('assertions', function() {
    equals( 2, 1, 'one equals one');
})
