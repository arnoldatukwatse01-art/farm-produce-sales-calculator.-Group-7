# Farm Produce Sales Calculator — Group 7

A PHP-based sales management script designed for small-scale farm produce businesses in Uganda. It calculates total gross sales, evaluates unit-based transport costs, determines net proceeds, and automatically assesses profit or loss status.

---

##  Features

* **Multi-Dimensional Data Representation:** Stores produce items (maize, beans, peas, millet) along with their unit types (`kg` or `sack`), quantities, and unit prices.
* **Dynamic Sales Calculation:** Calculates total gross revenue using a custom reusable function (`calculateGrossSales`).
* **Unit-Based Transport Costing:** Applies different rates based on product packaging (`1,000 UGX/kg` vs. `4,000 UGX/sack`) via `calculateTransportCosts`.
* **Financial Status Assessment:** Automatically computes net proceeds and categorizes financial standing into **Profit**, **Break-even**, or **Loss**.


---

##  Code Overview & Logic

```php
// Constants
const TRANSPORT_PER_KG = 1000;
const TRANSPORT_PER_SACK = 4000;

// Functions
calculateGrossSales($products)     // Iterates through products and returns total revenue
calculateTransportCosts($products) // Evaluates transport rates based on unit type ('kg' vs 'sack')

