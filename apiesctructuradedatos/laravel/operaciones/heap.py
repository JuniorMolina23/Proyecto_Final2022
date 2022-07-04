class Heap:

    def __init__(self):
        self.heapList = []
        self.size = 0

    def parentIndex(self, index):
        return (index - 1) // 2

    def percolateUp(self, i):
        pass

    def insert(self, k):
        self.heapList.append(k)
        self.size = self.size + 1
        self.percolateUp(self.size - 1) 