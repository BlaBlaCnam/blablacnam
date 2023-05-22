const express = require('express');
const app = express();

const sqlite3 = require('sqlite3').verbose();

const db = new sqlite3.Database('database', (err) => {
    if (err) {
      console.error(err.message);
    } else {
      console.log('Connected to the SQLite database.');

      const sql = 'SELECT * FROM user';
      db.all(sql, [], (err, rows) => {
        if (err) {
          console.error(err.message);
          console.log('Internal Server Error');
        } else {
            console.log(rows);
        }
      });
    }
  });

app.get('/', (req, res) => {
  res.send('Hello, World!');
});

const port = 3000; 
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
