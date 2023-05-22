import express from 'express';
import sqlite3 from 'sqlite3';
import { sql } from './functions.mjs';

const app = express();
const sqlite = sqlite3.verbose();

const db = new sqlite.Database('database', (err) => {
    if (err) {
      console.error(err.message);
    } else {
      console.log('Connected to the SQLite database.');

    }
  });

  var rows = await sql(db, 'SELECT * FROM user');
  console.log("users ; " , rows);

app.get('/', (req, res) => {
  res.send('Hello, World!');
});

const port = 3000; 
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
