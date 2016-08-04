function addBinary(a, b) {
	var result = 0;
	result = parseInt(a.toString(2));
	result += parseInt(b.toString(2));

	return result.toString();
}