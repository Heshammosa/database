SELECT orderNumber,quantityOrdered,priceEach ,(quantityOrdered * priceEach)AS total FROM orderdetails;

SELECT emp.employeeNumber AS empnumber ,
 concat(emp.firstName, ' ' ,emp.lastName)AS empname,
emp.reportsTo AS mangnamber,
concat(mang.firstName, ' ' ,mang.lastName)AS mangname 
FROM employees AS emp JOIN employees AS mang
ON emp.reportsTo = mang.employeeNumber;

SELECT firstName , officeCode FROM employees 
WHERE officeCode in(SELECT officeCode  FROM offices WHERE city ='london');

SELECT firstName,emp.officeCode,city ,offi.officeCode FROM employees AS emp JOIN offices AS offi
ON emp.officeCode = offi.officeCode
WHERE city ='london';

SELECT customers.customerName, orders.orderNumber,orderdetails.productCode, (orderdetails.quantityOrdered * orderdetails.priceEach)AS totalprice 
FROM orders JOIN orderdetails JOIN customers 
ON orders.orderNumber =  orderdetails.orderNumber
AND orders.customerNumber = customers.customerNumber;