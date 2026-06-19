# 🔧 PHP Built-in Functions — Implemented From Scratch

> A pure PHP project that re-implements common built-in string, array, and number functions **without using any native PHP equivalents** — built to deepen understanding of how these functions work under the hood.

---

## 📌 Why This Project?

Most developers use `strtolower()`, `array_search()`, or `round()` without thinking about how they actually work. This project answers that question by rebuilding them from scratch using only basic PHP — loops, `ord()`, `chr()`, and raw logic. No built-in shortcuts.

This is a great exercise for:
- Computer science students learning algorithms
- Developers who want to understand what happens "behind the scenes"
- Anyone preparing for technical interviews

---

## 📁 Project Structure

```
Function_Implement_With-PHP/
│
├── classes/
│   ├── clsString.php     # String manipulation functions
│   ├── clsArray.php      # Array utility functions
│   └── clsNumber.php     # Number rounding functions
│
└── index.php             # Usage examples
```

---

## 🧵 `clsString` — String Functions

A class that wraps a string value and provides methods that mimic PHP's built-in string functions.

```php
$str = new clsString("Hello World");
```

| Method | Equivalent Built-in | Description |
|---|---|---|
| `Repeat($count, $separated, $showEnd, $separator)` | `str_repeat()` | Repeats the string N times, with optional separator |
| `zFill($len, $fillChar)` | `str_pad()` | Pads string from the left to a given length |
| `Reverce()` | `strrev()` | Reverses the string character by character |
| `ToLowerCase()` | `strtolower()` | Converts A–Z to a–z using ASCII codes |
| `ToUpperCase()` | `strtoupper()` | Converts a–z to A–Z using ASCII codes |
| `SwapCase()` | *(no direct equivalent)* | Flips the case of every character |
| `ParseInt()` | `intval()` | Extracts only digit characters and returns as int |
| `Trimm($position, $char)` | `trim()` / `ltrim()` / `rtrim()` | Removes leading/trailing characters |
| `IfStrExist($target)` | `str_contains()` | Checks if a substring exists (sequential match) |
| `SubString($start, $end, $inc_end, $count_space)` | `substr()` | Extracts a portion of the string |
| `IsNaN()` | `!is_numeric()` | Returns `true` if string contains non-digit characters |
| `CleanString($keepNums)` | *(custom)* | Removes all non-alphabetic (and optionally non-numeric) characters |
| `ParseString()` | `parse_str()` | Parses `key=value&key2=value2` format into an associative array |
| `CountWords($separator)` | `str_word_count()` | Counts words using a given separator |
| `IsFirstLetterCapital()` | *(custom)* | Returns `true` if every word starts with a capital letter |
| `Slice($start, $end)` | `substr()` | Extracts characters from index `$start` to `$end` |
| `StrStartsWith($target)` | `str_starts_with()` | Checks if the string starts with a given word |
| `MoneyFormat()` | `number_format()` | Formats a numeric string with thousands separators |

### Example Usage

```php
$str = new clsString("  hello world  ");
echo $str->Trimm();          // "hello world"
echo $str->ToUpperCase();    // "HELLO WORLD"

$str2 = new clsString("42abc");
echo $str2->ParseInt();      // 42
echo $str2->IsNaN() ? 'Not a number' : 'Is a number'; // Not a number
```

---

## 📦 `clsArray` — Array Functions

```php
$arr = new clsArray([3, 1, 7, 2]);
```

| Method | Equivalent Built-in | Description |
|---|---|---|
| `DisplayItems()` | `print_r()` | Prints array contents in a readable format |
| `MinimumNumber()` | `min()` | Finds the smallest number by iterating |
| `MaximumNumber()` | `max()` | Finds the largest number by iterating |
| `GetSumOfNumbers($op)` | `array_sum()` | Sums, subtracts, or multiplies all elements |
| `IsInArray($target)` | `in_array()` | Checks if a value exists in the array |
| `Join($arr, $separator)` *(static)* | `implode()` | Joins array elements into a string |
| `Fill($count, $value)` *(static)* | `array_fill()` | Creates an array of N identical values |
| `Range($start, $end)` *(static)* | `range()` | Generates an array of sequential integers |
| `PushBack($value)` | `array_push()` | Appends a value to the end of the array |
| `StrReplace($target, $replaceTo)` | `array_replace()` | Replaces the first occurrence of a value |

### Example Usage

```php
$arr = new clsArray([5, 2, 9, 1]);
echo $arr->MinimumNumber();  // 1
echo $arr->MaximumNumber();  // 9
echo $arr->GetSumOfNumbers(); // 17

echo clsArray::Join(['PHP', 'JS', 'Python'], '|');
// "PHP | JS | Python"

$filled = clsArray::Fill(3, 'hello');
// ['hello', 'hello', 'hello']
```

---

## 🔢 `clsNumber` — Number Functions

```php
$num = new clsNumber(4.7);
```

| Method | Equivalent Built-in | Description |
|---|---|---|
| `Floor()` | `floor()` | Truncates decimal (rounds down) |
| `Ceil()` | `ceil()` | Rounds up to the next integer |
| `Round()` | `round()` | Rounds to nearest integer (0.5 rounds up) |

### Example Usage

```php
$num = new clsNumber(4.6);
echo $num->Floor();  // 4
echo $num->Ceil();   // 5
echo $num->Round();  // 5

$num2 = new clsNumber(4.4);
echo $num2->Round(); // 4
```

---

## 🚀 Getting Started

1. Clone the repo:
   ```bash
   git clone https://github.com/YOUR_USERNAME/Function_Implement_With-PHP.git
   ```

2. Serve with PHP's built-in server:
   ```bash
   cd Function_Implement_With-PHP
   php -S localhost:8000
   ```

3. Open `http://localhost:8000` in your browser.

---

## ⚠️ Known Issues & Planned Improvements

- [ ] `IfStrExist()` uses sequential character matching — it can produce false positives (e.g., searching "ace" in "abcde" would match even though they're not contiguous). A proper substring search should use a sliding window approach.
- [ ] `SwapCase()` does not handle non-alphabetic characters correctly — it will corrupt digits and symbols by adding/subtracting 32 from their ASCII code.
- [ ] `MoneyFormat()` uses string comparison (`$this->value <= '999'`) instead of numeric comparison, which will give wrong results for certain values.
- [ ] `clsNumber::Round()` — the condition `$this->value >= (int)($this->value) + 0.5` has a logic issue: casting to int first loses the decimal, so the comparison may not always work correctly. Should cast to int **after** the comparison.
- [ ] `SubString()` returns raw strings like `'Range Mistaic!'` for errors — should throw exceptions instead.
- [ ] `clsArray` has an unused `use Dom\CharacterData;` import at the top.
- [ ] No unit tests — would benefit from PHPUnit test coverage.

---

## 📚 What I Learned

- How PHP's ASCII-based character functions (`ord()`, `chr()`) work under the hood
- Loop-based approaches to string traversal vs. built-in shortcuts
- The difference between correct algorithm logic and "happens to work for common cases"
- How standard library functions handle edge cases that naive implementations miss

---

## 🧑‍💻 Author

**Vigo** — IT Student | Aspiring Web Security Researcher  
*Building things from scratch to understand how they break.*