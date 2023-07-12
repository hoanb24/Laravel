<!-- Hiển thị form -->
<form method="post" action="{{ route('sum.calculate') }}">
    @csrf
    <label for="a">A:</label>
    <input type="text" name="a"><br>
    <label for="b">B:</label>
    <input type="text" name="b"><br>
    <input type="submit" value="Tính tổng">
</form>

<!-- Hiển thị kết quả tính tổng nếu có -->
@if (isset($sum))
    <p>Kết quả: {{ $sum }}</p>
@endif
