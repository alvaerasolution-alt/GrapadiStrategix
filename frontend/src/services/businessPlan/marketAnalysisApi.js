import api from '../authApi';

export const marketAnalysisApi = {
    getAll: (params = {}) => api.get("/market-analysis", { params }),
    
    getById: (id) => api.get(`/market-analysis/${id}`),
    
    create: (analysisData) => api.post("/market-analysis", analysisData),
    
    update: (id, analysisData) => api.put(`/market-analysis/${id}`, analysisData),
    
    delete: (id, userId) => api.delete(`/market-analysis/${id}`, { 
        data: { user_id: userId } 
    }),
};

export default marketAnalysisApi;