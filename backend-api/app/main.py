from fastapi import FastAPI

app = FastAPI(title="AI News Backend Platform")

@app.get("/")
def root():
    return {"message": "AI News Backend API running"}
