from fastapi import FastAPI
from routes.user import api

app = FastAPI()

app.include_router(api)