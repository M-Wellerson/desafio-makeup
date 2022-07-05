SELECT dept_name, first_name, last_name, DATE(from_date) - DATE(to_date)
FROM dept_emp
	INNER JOIN employees ON dept_emp.emp_no = employees.emp_no
    INNER JOIN departments ON dept_emp.dept_no = departments.dept_no
	ORDER BY DATE(from_date) - DATE(to_date) DESC
    LIMIT 10;