from operaciones.heap import Heap

class MinHeap(Heap):

    def __init__(self):
        Heap.__init__(self)

    def percolateUp(self, i):
        iParent = self.parentIndex(i)
        while(iParent >= 0):
            if self.heapList[iParent] > self.heapList[i]:
                tmp = self.heapList[iParent]
                self.heapList[iParent] = self.heapList[i]
                self.heapList[i] = tmp
            i = iParent
            iParent = self.parentIndex(i)


    def prueba1(self,valor1):
        list = valor1
        for i in range(len(list)):
            self.insert(list[i])
        return self.heapList

class prueba:
    def prueba(valor1):
        heap = MinHeap()
        return heap.prueba1(valor1)