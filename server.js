const express = require("express");
const cors = require("cors");
const app = express();
const PORT = 3000;
app.use(cors());
app.get("/time", (req, res) => {
    const currentTime = new Date().toLocaleTimeString();
    res.json({ time: currentTime });
});
app.listen(PORT, () => { 
    console.log(`Server is running on port ${PORT}`); 
});
