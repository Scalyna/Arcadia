// server.js
const express = require('express');
const app = express();
const path = require('path');
const port = 3000;

// Serve static files from the 'public' directory
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.listen(port, () => {
    console.log(`Zoo web app listening at http://localhost:${port}`);
});
