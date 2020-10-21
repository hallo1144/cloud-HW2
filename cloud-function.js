/**
 * Responds to any HTTP request.
 *
 * @param {!express:Request} req HTTP request context.
 * @param {!express:Response} res HTTP response context.
 */
exports.helloWorld = (req, res) => {
    let h = req.query.h || req.body.h;
    let w = req.query.w || req.body.w;

    h = Number(h);
    w = Number(w);
    if(isNaN(w) || isNaN(h) || h == 0 || w == 0) {
        return res.status(500).send({"status": "error", "description": "height or weight is not a number", "query": req.query});
    }

    return res.status(200).send({"status": "success", "bmi": w/((h/100)^2) });
};