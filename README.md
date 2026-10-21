# 🌾 Farm Produce Sales Calculator - Group 7
**Cavendish University Uganda | School of Computer Science**
**Course: Structured Programming | PHP Project**

### Project Overview
This PHP application calculates gross sales, transport costs, and net proceeds for farm produce. It helps small-scale farmers in Uganda to quickly determine profit after deducting transport costs (500 UGX per kg).

### Group Members & Branch Responsibilities

| Branch | Members | Responsibility | Deliverables |
| :--- | :--- | :--- | :--- |
| **Branch 1** | Ahmed Yussin, Evans Alex, Mark Marvin | Variables, Constants, Arrays | Product prices, quantities |
| **Branch 2** | Duaa Salah, Aya Ismiel, Debbie, Cathy | Functions | calculateGross(), calculateTransport(), calculateNet() |
| **Branch 3** | Abdon, Brandon, Ismael, Hilton | Loops, Conditions, Strings | foreach loop, if-else, strtoupper() |
| **Branch 4** | Atukwase Arnold, Abdulrashid, Mohamed Osman | Testing & Debugging | 3 Test cases + Error fix |

### Features Implemented
- **Constants:** `TRANSPORT_RATE` = 500, `HIGH_SALES_THRESHOLD` = 500000
- **Arrays:** Associative arrays for produce prices and quantities
- **Functions:** 3 reusable functions with parameters and return values
- **Loops:** foreach loop to display all produce
- **Conditions:** if-elseif-else for profit status
- **String Functions:** strtoupper(), concatenation with `.`
- **Error Handling:** Checks for invalid/negative quantities

### How to Run
1. Install XAMPP
2. Copy `farm_produce_sales_calculator.php` to `htdocs/`
3. Start Apache in XAMPP
4. Open browser: `http://localhost/farm_produce_sales_calculator.php`

### Test Cases
- **Test 1 (Normal):** 140kg total -> Gross 365,000 UGX, Net 295,000 UGX
- **Test 2 (Boundary):** 0kg -> Gross 0, Net 0 -> Status: LOSS
- **Test 3 (Invalid):** -5kg -> Shows "Invalid quantity" message

### Error Encountered & Fixed
**Error:** `define[TRANSPORT_RATE, 500]` - Parse error, used square brackets instead of parentheses.
**Fix:** Changed to `define("TRANSPORT_RATE", 500)` - Program executed successfully.


